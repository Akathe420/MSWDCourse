<!doctype html>
<html lang="en">
    <?php include 'includes/head.php'?>

    <body>
    <?php include 'includes/menu.php'?>

    <div class="container">
        <h1>PHP Summary</h1>
        <?php 
            printf('<p>You are running PHP %s</p>', phpversion());

//Purpose: Knowing the PHP version is crucial for compatibility and debugging. 
//Different versions of PHP have different features and deprecations,
//so it’s important to know which version is running to ensure that the code will execute correctly.

            echo '<h4>Loaded Extensions:</p>';
            $ext= get_loaded_extensions();
            var_dump($ext);

//Purpose: PHP extensions provide additional functionality to the core language.
//Listing loaded extensions helps to ensure that all necessary extensions are available
//for the application to function correctly. It’s also useful for debugging issues related to missing or incompatible extensions.

            echo '<h4>Server Environment</h4>';
            var_dump($_SERVER);
            
//Purpose: The $_SERVER array contains information about the server and execution environment.
//This includes headers, paths, and script locations. Accessing this information is useful for 
//understanding the context in which the script is running, which can help in debugging and configuring the server environment properly.

            //Self Study

    
            echo '<h4>Clients Request</p>';
            var_dump($_SERVER['REQUEST_METHOD']); 

//Purpose: Identifying the HTTP request method (GET, POST, etc.) is essential for processing the request correctly.
//Different request methods may trigger different behaviors in the application.
        
            echo '<h4>Request Headers</h4>';
            
                    foreach (getallheaders() as $name => $value) {
                    echo "<li><strong>$name:</strong> $value</li>";
                }
                
//Purpose: Headers can contain important information about the client and the request. For example, 
//the User-Agent header indicates the browser type, while cookies and authorization tokens are also passed via headers.
//Accessing headers is necessary for tasks like authentication, content negotiation, and debugging client-server interactions.            
            
            echo '<h4>GET Parameters</h4>';
            
                
                if (!empty($_GET)) {
                    foreach ($_GET as $key => $value) {
                        echo "<li><strong>$key:</strong> $value</li>";
                    }
                } else {
                    echo "<li>No GET parameters</li>";
                }
                
//Purpose: GET parameters are used to pass data to the server via the URL. 
//Displaying them helps to debug and ensure that the correct data is being sent and received. 
//It’s particularly useful for search queries and filter parameters in URLs.            
        
            echo '<h4>POST Parameters</h4>';
            
                
                if (!empty($_POST)) {
                    foreach ($_POST as $key => $value) {
                        echo "<li><strong>$key:</strong> $value</li>";
                    }
                } else {
                    echo "<li>No POST parameters</li>";
                }

//Purpose: POST parameters are used to send data to the server in the body of the HTTP request.
//This is typically used for form submissions.
//Displaying POST parameters helps in debugging form submissions and ensuring that the data is being sent and received correctly.                
                
                echo '<h4>Global Variables</h4>';
                echo '<pre>';
                var_dump($GLOBALS);
                echo '</pre>';

//Purpose: The $GLOBALS array contains all global variables in the script. 
//Displaying them can help debug issues related to variable scope and ensure that
//global variables are being set and accessed as expected. It’s useful for understanding the global state of the application.                
    
                // Display current file name
                echo '<h4>Current File</h4>';
                echo '<p>' . basename(__FILE__) . '</p>';

//Purpose: Knowing the name of the current file is useful for debugging and logging purposes.
//It helps to identify which script is being executed, especially in complex applications with many included files.
//This can be crucial for tracing errors and understanding the flow of execution.                
        
//Summary
// 1. PHP Version: Ensures compatibility and helps in debugging.
// 2. Loaded Extensions: Verifies the availability of necessary functionality.
// 3. Server Environment: Provides context about the server and execution environment.
// 4. Client's Request Information: Processes and debugs client requests.
// 5. Global Variables: Helps in debugging and understanding the global state.
// 6. Current File Name: Aids in debugging and logging by identifying the executing script.

//These elements provide a comprehensive overview of the environment and state in which a PHP script is running,
//aiding in development, debugging, and configuration.

        ?>
    </div>

    <?php include 'includes/footer.php'?>
    </body>
</html>