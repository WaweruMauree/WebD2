USE 'website1';

DROP TABLE IF EXISTS 'regions';
CREATE TABLE IF NOT EXISTS 'regions'(
'County' varchar(50) NOT NULL,
'Reach' bigint(20) NOT NULL,
'Supervisor' varchar(50) NOT NULL,
'Email' varchar(50) NOT NULL,
'Phone Number' tinyint(10) NOT NULL
PRIMARY KEY ('County'),
UNIQUE KEY ('Supervisor')

);