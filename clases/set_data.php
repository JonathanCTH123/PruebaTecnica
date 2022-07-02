<?php
 require_once('dbconnect.php');

class setDataClass extends ConectionDB
{
public function set_order($data){
    


    try {
        $query = "INSERT INTO `orders` (
            `employee_id`, `customer_id`, 
        `order_date`, `shipped_date`,
         `shipper_id`, `ship_name`,
          `ship_address`, `ship_city`,
           `ship_country_region`, `shipping_fee`,
            `taxes`, `payment_type`,
             `paid_date`, `tax_rate`, 
             `status_id`) VALUES (
                :employee_id, :customer_id, 
                :order_date,:shipped_date, 
                :shipper_id, :ship_name, 
                :ship_address, :ship_city, 
                :ship_country_region, :shipping_fee,
                :taxes, :payment_type,
                  :paid_date,:tax_rate, 
                  :status_id);";
        $statement = $this->dbConnect->prepare($query);
        $statement->execute(array(
            ":employee_id"=>$data["employee_id"],
            ":customer_id"=>$data["customer_id"],
            ":order_date"=>$data["order_date"],
            ":shipped_date"=>$data["shipped_date"],
            ":shipper_id"=>$data["shipper_id"],
            ":ship_name"=>$data["ship_name"],
            ":ship_address"=>$data["ship_address"],
            ":ship_city"=>$data["ship_city"],

            ":ship_country_region"=>$data["ship_country_region"],
            ":shipping_fee"=>$data["shipping_fee"],

            ":taxes"=>$data["taxes"],

            ":payment_type"=>$data["payment_type"],

            ":tax_rate"=>$data["tax_rate"],
            ":paid_date"=>$data["paid_date"],

            ":status_id"=>$data["status_id"],



        ));
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);
        return $result;

      } catch (Exception $e) {
          print "!Error¡: " . $e->getMessage() . "</br>";
          die();
      }


}
   
}