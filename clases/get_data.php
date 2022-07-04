<?php
 require_once('dbconnect.php');

class getDataClass extends ConectionDB
{

    public function getListSwagger(){

        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://devcobrosapi.azurewebsites.net/api/Creditos/getList',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_SSL_VERIFYHOST=>false,
            CURLOPT_SSL_VERIFYPEER=>false,
           
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        if ($err) {
            return $err;
        } else {
         $res = json_decode($response, true);
           return $res;


        }
    }

    public function getProductsByIdSupplier($id){
        try {
            $query = "SELECT * FROM 
            products p 
            join suppliers s on p.supplier_ids=s.id
            where s.id=:id";
            $statement = $this->dbConnect->prepare($query);
            $statement->execute(array(
                ":id"=>$id
            ));
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
            return $result;

          } catch (Exception $e) {
              print "!Error¡: " . $e->getMessage() . "</br>";
              die();
          }
    }
    public function getOrders(){
        try {
            $query = "select id,ship_name,ship_address,ship_city from orders order by order_date desc limit 5";
            $statement = $this->dbConnect->prepare($query);
            $statement->execute();
            $result = $statement->fetchAll(PDO::FETCH_ASSOC);
                 echo json_encode($result);

          } catch (Exception $e) {
              print "!Error¡: " . $e->getMessage() . "</br>";
              die();
          }
    }
    


}





?>












