<?php
class Order{
    
    // database connection and table name
    private $conn;
    private $table_name = "orders";
    
    // object properties
    public $name;
    public $price;
    public $category;
    public $description;
    public $type;
    public $orders;
    public $start_date;
    public $expiry_date;
    public $timestamp;
    public $customer_id;
    public $job_order_no;
    public $job_order_location;
    
    public $workordername;
    public $imageType;
    
    public $work_order;
    public $security_letter;
    public $rental_payment;
    public $security_negotiable;
    
    public function __construct($db){
        $this->conn = $db;
    }
    
    public function create(){
        try{
            
            // insert query
            $query = "INSERT INTO orders
                SET name=:name, job_order_no=:job_order_no, category=:category, description=:description, type=:type, price=:price, start_date=:start_date, job_order_location=:job_order_location, customer_id=:customer_id, approved_planning='PENDING', financial_clearance='PENDING',
                
                timestamp=:created, expiry_date=:expiry
                ";
 
            // prepare query for execution
            $stmt = $this->conn->prepare($query);
 
            // sanitize
            $name=htmlspecialchars(strip_tags($this->name));
            $job_order_no=htmlspecialchars(strip_tags($this->job_order_no));
            $job_order_location=htmlspecialchars(strip_tags($this->job_order_location));
            $description=htmlspecialchars(strip_tags($this->description));
            $customer_id=htmlspecialchars(strip_tags($this->customer_id));
            $price=htmlspecialchars(strip_tags($this->price));
            $category=htmlspecialchars(strip_tags($this->category));
            $type=htmlspecialchars(strip_tags($this->type));
            $start_date=htmlspecialchars(strip_tags($this->start_date));
            $expiry_date=htmlspecialchars(strip_tags($this->expiry_date));
           // $work_order=tmlspecialchars(strip_tags($this->work_order));

            // bind the parameters
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':job_order_no', $job_order_no);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':description', $description);
            
            $stmt->bindParam(':category', $category);
            $stmt->bindParam(':type', $type);
            $stmt->bindParam(':job_order_location', $job_order_location);
            $stmt->bindParam(':start_date', $start_date);
            $stmt->bindParam(':customer_id', $customer_id);
            $stmt->bindParam(':expiry', $expiry_date);
           //  $stmt->bindParam(':work_order', $work_order);
            
            // we need the created variable to know when the record was created
            // also, to comply with strict standards: only variables should be passed by reference
            $created=date('Y-m-d H:i:s');
            $stmt->bindParam(':created', $created);
            
            // Execute the query
            if($stmt->execute()){
                return true;
            }else{
                return false;
            }
 
        }
        
        // show error if any
        catch(PDOException $exception){
            die('ERROR: ' . $exception->getMessage());
        }
    }
    
    public function readAll(){
        //select all data
    $query = "SELECT  name, description, price
                FROM " . $this->table_name;
 
    $stmt = $this->conn->prepare($query);
    $stmt->execute();
 
    $results=$stmt->fetchAll(PDO::FETCH_ASSOC);
 
    return json_encode($results);
    }
    
    public function readOne(){
        
    }
    
    public function update(){
        
        $query = "UPDATE orders
                SET name=:name, description=:description, price=:price, category=:category, type=:type, expiry=:expiry WHERE id=:id";
 
            // prepare query for execution
            $stmt = $this->conn->prepare($query);
 
            // sanitize
            $name=htmlspecialchars(strip_tags($this->name));
            $description=htmlspecialchars(strip_tags($this->description));
            $price=htmlspecialchars(strip_tags($this->price));
            $category=htmlspecialchars(strip_tags($this->category));
            $type=htmlspecialchars(strip_tags($this->type));
            $expiry_date=htmlspecialchars(strip_tags($this->expiry_date));

            // bind the parameters
            $stmt->bindParam(':name', $name);
            $stmt->bindParam(':description', $description);
            $stmt->bindParam(':price', $price);
            $stmt->bindParam(':category', $category);
            $stmt->bindParam(':type', $type);
            $stmt->bindParam(':expiry', $expiry_date);
        
            // execute the query
            if($stmt->execute()){
                return true;
            }else{
                return false;
            }
    }
    
    public function delete($ins){
        // query to delete multiple records
        $query = "DELETE FROM orders WHERE id IN (:ins)";

        $stmt = $this->conn->prepare($query);

        // sanitize
        $ins=htmlspecialchars(strip_tags($ins));

        // bind the parameter
        $stmt->bindParam(':ins', $ins);

        if($stmt->execute()){
            return true;
        }else{
            return false;
        }
    }
    
    public function upload(){
                if(!empty($_FILES)){
                    $targetDir = "uploads/";
                    $fileName = $_FILES['file']['name'];
                    $targetFile = $targetDir.$fileName;
                    if(move_uploaded_file($_FILES['file']['tmp_name'],$targetFile)){
                        //insert file information into db table
                        $conn->query("INSERT INTO files (file_name, uploaded) VALUES('".$fileName."','".date("Y-m-d H:i:s")."')");
                    }
                    else{
                        //TODO handle upload failure
                    }
                }
        
    }
}
?>