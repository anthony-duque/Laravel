<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::unprepared("CREATE DEFINER=`root`@`localhost` PROCEDURE `sp_Load_Values_From_Extract_Table`(
	IN companyID INT
)
BEGIN

	
		
	
		
	UPDATE extract_file_dump efd 
	INNER JOIN locations li
		ON efd.shop_name = li.location
		AND efd.company_id = li.company_id 
	SET efd.location_id = li.id
	WHERE efd.company_id = companyID;
	
	
		
	
	DELETE FROM repairs
	WHERE loc_id IN 
	(SELECT id FROM locations li
	WHERE company_id = companyID);
	
		
	
	INSERT INTO repairs
		(ro_num, owner, vehicle, 
		vehicle_in, technician, current_phase, estimator, vehicle_color, license_plate, 
		scheduled_out, loc_id, vin)
	SELECT DISTINCT
		efd.ro_num, efd.owner, CONCAT(efd.vehicle_year, ' ', efd.vehicle_make, ' ', efd.vehicle_model) AS vehicle,
		efd.date_in, efd.technician, efd.current_phase, efd.estimator, efd.vehicle_color, efd.license_plate,
		efd.target_date, efd.location_id, efd.vin
	FROM extract_file_dump efd INNER JOIN locations li
		ON efd.location_id = li.id AND
		efd.company_id = li.company_id
	WHERE efd.company_id = companyID;
	
		
	
	DELETE FROM parts_status ps
	WHERE loc_id IN
		(SELECT id FROM locations li WHERE li.company_id = companyID);
	
		
	
	INSERT INTO parts_status
		(part_number, part_description, part_type, ro_qty, vendor_name, ordered_qty, repair_code, 
		line, received_qty, returned_qty, order_date, invoice_date, loc_id, part_status, 
		part_price, ro_num)
	SELECT
		efd.part_num, efd.part_desc, efd.part_type, efd.ro_qty, efd.vendor_name, efd.order_qty, efd.repair_code, 
		efd.line_num, efd.received_qty, efd.return_qty, efd.order_date, efd.received_date, efd.location_id, efd.part_status, 
		efd.part_price, efd.ro_num  
	FROM extract_file_dump efd INNER JOIN locations li
		ON efd.location_id = li.id AND
		efd.company_id = li.company_id
	WHERE efd.company_id = companyID;
	
END");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared("DROP PROCEDURE IF EXISTS sp_Load_Values_From_Extract_Table");
    }
};
