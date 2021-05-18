
CREATE TABLE `mini_statement` (
  `sender` varchar(50) NOT NULL,
  `receiver` varchar(50) NOT NULL,
  `amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mini_statement`
--

INSERT INTO `mini_statement` (`sender`, `receiver`, `amount`) VALUES
('Tanmay', 'Maneet', 100),
('Prateek', 'Parth', 50),
('Yash', 'Lakshya', 200),
('Maneet', 'Ankur', 100),
('Ankur', 'Vipul', 110),
('Vipul', 'Tanmay', 110);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `amount` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `email`, `amount`) VALUES
('Tanmay', 'Tanmay@gmail.com', 1700),
('Ankur', 'Ankur@gmail.com', 2500),
('Maneet', 'Maneet@gmail.com', 3400),
('Prateek', 'Prateek@gmail.com', 950),
('Vibhor', 'Vibhor@gmail.com', 1000),
('Devashish', 'Devashish@gmail.com', 1900),
('Vipul', 'Vipul@gmail.com', 1000),
('Parth', 'Parth@gmail.com', 2450),
('Yash', 'Yash@gmail.com', 800),
('Lakshya', 'Lakshya@gmail.com', 1200);
COMMIT;


