
How to use JOIN :-

# Start Here
1) INNER JOIN:- here is the query for inner join ===>

# aliases 

SELECT
  `class`.classTitle as cTitle,
  `subject`.*
FROM 
  `subject` 
INNER JOIN 
  `class`  
ON 
  `subject`.Class = `class`.id
ORDER BY
   cTitle
ASC

# End Here


# Start Here
2) INNER JOIN:-  Using aliases

# Query with aliases

SELECT
  t2.`classTitle`         as cTitle,
  t1.`id`                 as id,  
  t1.`subjectTitle`       as title,  
  t1.`subjectDescription` as description
FROM 
  `subject` as t1
INNER JOIN 
  `class`  as t2
ON 
  t1.`Class` = t2.`id`
ORDER BY
   cTitle
ASC
# End Here


# Start Here
3) LEFT JOIN:-  Here is the query for LEFT JOIN 
SELECT
 * 
FROM 
  `subject` 
LEFT JOIN 
  `class`  
ON 
  `subject`.Class = `class`.id;
# End Here



# Start Here
3) RIGHT JOIN:-  Here is the query for RIGHT JOIN 
SELECT
 * 
FROM 
  `subject` 
RIGHT JOIN 
  `class`  
ON 
  `subject`.Class = `class`.id;
# End Here