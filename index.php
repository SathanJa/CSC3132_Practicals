<!DOCTYPE html>
<html>
    <head>
        <style>
            li:hover {
                color: firebrick;
                background-color: blanchedalmond;
            }
        </style>
    </head>
    <body>
        <?php
        $productCategories = array(
            'Electronics' => array(
                'Smartphones' => array(
                    'Apple' => array(
                        'iPhone 13',
                        'iPhone 12 Pro',
                        'iPhone SE',
                    ),
                    'Samsung' => array(
                        'Galaxy S21',
                        'Galaxy Note 20',
                        'Galaxy A52',
                    ),
                ),
                'Laptops' => array(
                    'Dell' => array(
                        'XPS 13',
                        'Inspiron 15',
                    ),
                    'HP' => array(
                        'HP Spectre x360',
                        'HP Pavilion' => array(
                            'Pavilion 15',
                            'Pavilion x360',
                            'Pavilion Gaming',
                        ),
                    ),
                ),
            ),
            'Clothing' => array(
                'Men' => array(
                    'T-Shirt',
                    'Jeans',
                    'Suits',
                ),
                'Women' => array(
                    'Dresses',
                    'Shoes',
                    'Handbags',
                ),
            ),
            'Home & Kitchen' => array(
                'Furniture' => array(
                    'Sofas',
                    'Tables',
                    'Chairs',
                ),
                'Applications' => array(
                    'Refrigerators',
                    'Microwaves',
                    'Washing Machine',
                ),
            ),
        );

        function printArray($arr)
        {
            echo "<ul>";
            foreach ($arr as $key => $item) {
                if (is_array($item)) {
                    echo "<li>" . htmlspecialchars($key) . "</li>"; // Use key as list item
                    printArray($item); // Recursively print nested array
                } else {
                    echo "<li>" . htmlspecialchars($item) . "</li>"; // Use item as list item
                }
            }
            echo "</ul>";
        }

        // Call the function with the array
        printArray($productCategories);
        ?>
    </body>
</html>