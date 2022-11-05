<?php

//this file to carry out create, update, delete functions relating to the database

class crud
{
    private $db; //private db object

    function  __construct($conn)
    {
        $this->db = $conn; //constructor to initialise private variable to the database connection
    }

    //------------------------booking form functions below -----------------------------------------------------------
    public function insertBookingRequest($firstName, $lastName, $startDate, $endDate, $emailAddress, $contactNumber)
    {
        try {
            $sql = " INSERT INTO bookingrequest (firstName, lastName, startDate, endDate, emailAddress, contactNumber)
                     VALUES (:firstName, :lastName, :startDate, :endDate, :emailAddress, :contactNumber)";
            //use the placeholder values, as a security measure
            $stmt = $this->db->prepare($sql);
            //prepare a statement to use the $sql defined above

            //then bind the placeholder parameters to the actual parameters
            $stmt->bindparam(':firstName', $firstName);
            $stmt->bindparam(':lastName', $lastName);
            $stmt->bindparam(':startDate', $startDate);
            $stmt->bindparam(':endDate', $endDate);
            $stmt->bindparam(':emailAddress', $emailAddress);
            $stmt->bindparam(':contactNumber', $contactNumber);

            //now execute the statement
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function getBookingData()
    {
        $sql = "SELECT * FROM `bookingrequest`";
        $result = $this->db->query($sql);
        return $result;
    }

    public function getBookingDetails($id)
    {
        $sql = "SELECT * FROM `bookingrequest` where bookingId=:id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }

    public function editBooking($id, $firstName, $lastName, $startDate, $endDate, $emailAddress, $contactNumber)
    {
        try {
            $sql = "UPDATE `bookingrequest` SET 
           
                firstName=:firstName,
                lastName=:lastName,
                startDate=:startDate,
                endDate=:endDate,
                emailAddress=:emailAddress,
                contactNumber=:contactNumber
               
                 WHERE bookingId = :id";          
        
            //use the placeholder values, as a security measure
            $stmt = $this->db->prepare($sql);
            //prepare a statement to use the $sql defined above

            //then bind the placeholder parameters to the actual parameters
            //don't forget to bind the id
            $stmt->bindparam(':id', $id);
            $stmt->bindparam(':firstName', $firstName);
            $stmt->bindparam(':lastName', $lastName);
            $stmt->bindparam(':startDate', $startDate);
            $stmt->bindparam(':endDate', $endDate);
            $stmt->bindparam(':emailAddress', $emailAddress);
            $stmt->bindparam(':contactNumber', $contactNumber);

            //now execute the statement
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }


    //------------------------contact form functions below -----------------------------------------------------------
    public function insertContact($firstName, $lastName, $emailAddress, $contactNumber, $contactText)
    {
        try {
            $sql = " INSERT INTO contact (firstName, lastName, emailAddress, contactNumber, contactText)
                 VALUES (:firstName, :lastName, :emailAddress, :contactNumber, :contactText)";
            //use the placeholder values, as a security measure
            $stmt = $this->db->prepare($sql);
            //prepare a statement to use the $sql defined above

            //then bind the placeholder parameters to the actual parameters
            $stmt->bindparam(':firstName', $firstName);
            $stmt->bindparam(':lastName', $lastName);
            $stmt->bindparam(':emailAddress', $emailAddress);
            $stmt->bindparam(':contactNumber', $contactNumber);
            $stmt->bindparam(':contactText', $contactText);

            //now execute the statement
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function getContactData()
    {
        $sql = "SELECT * FROM `contact`";
        $result = $this->db->query($sql);
        return $result;
    }

    public function getContactDetails($id)
    {
        $sql = "SELECT * FROM `contact` where id=:id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }

    public function editContact($id, $firstName, $lastName, $emailAddress, $contactNumber, $contactText)
    {
        try {
            $sql = "UPDATE `contact` SET 
           
                `firstName`=:firstName,
                `lastName`=:lastName,
                `emailAddress`=:emailAddress,
                `contactNumber`=:contactNumber,
                `contactText`=:contactText
               
                 WHERE id = :id";

            //use the placeholder values, as a security measure
            $stmt = $this->db->prepare($sql);
            //prepare a statement to use the $sql defined above

            //then bind the placeholder parameters to the actual parameters
            //don't forget to bind the id
            $stmt->bindparam(':id', $id);
            $stmt->bindparam(':firstName', $firstName);
            $stmt->bindparam(':lastName', $lastName);
            $stmt->bindparam(':emailAddress', $emailAddress);
            $stmt->bindparam(':contactNumber', $contactNumber);
            $stmt->bindparam(':contacText', $contactText);

            //now execute the statement
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }


    //------------------------testimonial form functions below -----------------------------------------------------------
    public function insertTestimonial($firstName, $lastName, $dateArrived, $testimonialText)
    {
        try {
            $sql = " INSERT INTO testimonial (firstName, lastName, dateArrived, testimonialText) 
                VALUES (:firstName, :lastName, :dateArrived, :testimonialText)";
            //use the placeholder values, as a security measure
            $stmt = $this->db->prepare($sql);
            //prepare a statement to use the $sql defined above

            //then bind the placeholder parameters to the actual parameters
            $stmt->bindparam(':firstName', $firstName);
            $stmt->bindparam(':lastName', $lastName);
            $stmt->bindparam(':dateArrived', $dateArrived);
            $stmt->bindparam(':testimonialText', $testimonialText);

            //now execute the statement
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }

    public function getTestimonialData()
    {
        $sql = "SELECT * FROM `testimonial`";
        $result = $this->db->query($sql);
        return $result;
    }

    public function getTestimonialDetails($id)
    {
        $sql = "SELECT * FROM `testimonial` where testimonial_id=:id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindparam(':id', $id);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }

    public function editTestimonial($id, $firstName, $lastName, $dateArrived, $testimonialText)
    {
        try {
            $sql = "UPDATE `testimonial` SET 
           
                `firstName`=:firstName,
                `lastName`=:lastName,
                `dateArrived`=:dateArrived,
                `testimonialText`=:testimonialText
               
                 WHERE testimonial_id = :id";

            //use the placeholder values, as a security measure
            $stmt = $this->db->prepare($sql);
            //prepare a statement to use the $sql defined above

            //then bind the placeholder parameters to the actual parameters
            //don't forget to bind the id
            $stmt->bindparam(':id', $id);
            $stmt->bindparam(':firstName', $firstName);
            $stmt->bindparam(':lastName', $lastName);
            $stmt->bindparam(':dateArrived', $dateArrived);
            $stmt->bindparam(':testimonialText', $testimonialText);
           

            //now execute the statement
            $stmt->execute();
            return true;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return false;
        }
    }
}
