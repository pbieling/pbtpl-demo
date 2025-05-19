<?php

namespace MyProject;

use PbClasses\DB\SqlPdo;

class DbConnection {

    public static function get() {
        $conFile = './config/db.conf.php';
        if (!file_exists($conFile)) {
            throw new \Exception('config/db.conf.php not found.');
        }
        $confArr = require $conFile;

        $db = new SqlPdo($confArr);

        if (!self::tableReady($db)) {
            self::prepareTable($db);
        }

        return $db;
    }

    protected static function prepareTable($db) {
        $dump = <<< 'TABLEDUMP'
DROP TABLE IF EXISTS `customer`;
START TRANSACTION;

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL,
  `zip` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `customer` (`id`, `first_name`, `last_name`, `address`, `city`, `state`, `zip`) VALUES
(1, 'John', 'Doe', '123 Maple St', 'Springfield', 'IL', '62704'),
(2, 'Jane', 'Smith', '456 Oak Ave', 'Madison', 'WI', '53703'),
(3, 'Emily', 'Johnson', '789 Pine Rd', 'Austin', 'TX', '73301'),
(4, 'Michael', 'Brown', '321 Birch Blvd', 'Denver', 'CO', '80202'),
(5, 'Sarah', 'Davis', '654 Cedar Dr', 'Portland', 'OR', '97201'),
(6, 'David', 'Miller', '987 Spruce Ln', 'Seattle', 'WA', '98101'),
(7, 'Laura', 'Wilson', '111 Elm St', 'Boston', 'MA', '02108'),
(8, 'Daniel', 'Taylor', '222 Ash Ct', 'Chicago', 'IL', '60601'),
(9, 'Sophia', 'Anderson', '333 Fir Way', 'San Diego', 'CA', '92101'),
(10, 'James', 'Thomas', '444 Willow Pkwy', 'Phoenix', 'AZ', '85001');

ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;
TABLEDUMP;

        try {
            $db->multiQuery($dump);
        } catch (\Exception $exc) {
            echo $exc->getMessage();
            exit;
        }
    }
    
    protected static function tableReady($db) {
        try {
            $tableArr = $db->getTableList();
        } catch (\Exception $exc) {
            echo $exc->getMessage();
            exit;
        }
        
        if (! in_array('customer', $tableArr)) {
            return false;
        }
        
        $res = $db->select('customer', 'id');
        if (! $res) {
            return false;
        }
        return true;
    }
}
