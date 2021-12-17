USE superjustin_td_php;
select * from user;
SELECT ID, PASSWORD FROM user ;
select * from superjustin_td_php.user where email='desio.j@live.fr';

SELECT ID, PASSWORD FROM user WHERE ID='123'AND PASSWORD='oui';
    SELECT ID, PASSWORD FROM user WHERE ID='123';

ALTER TABLE user
ADD conexion_counter int not null;

UPDATE superjustin_td_php.user t
SET t.conexion_counter = t.conexion_counter + 1
WHERE t.id = 123;
