CREATE TABLE menu (
    id INT PRIMARY KEY AUTO_INCREMENT NOT NULL,
    name TEXT NOT NULL,
    price DECIMAL(13,2) NOT NULL,
    category VARCHAR(50) NOT NULL,
    description TEXT NOT NULL
)

INSERT INTO menu (name, price, category)
VALUES 
    ('Chicken Fried Rice', '5.99', 'fried-rice', 'Pint Size')
    ('Pork Fried Rice', '6.99', 'fried-rice', 'Quart Size')
    ('Beef Fried Rice', '7.99', 'fried-rice', 'Pint Size')
    ('Your Fried Rice', '8.99', 'fried-rice', 'Pint Size')
    
