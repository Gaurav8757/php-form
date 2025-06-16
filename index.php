<?php
// Start the session to store form data if needed
session_start();
require_once 'connect.php';
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style type="text/tailwindcss">
      @theme {
        --color-clifford: #da373d;
      }
    </style>
    <title>User Form</title>
</head>

<body class="bg-gray-100 text-gray-900 font-sans flex flex-col items-center justify-center p-4">
    <div class="w-full max-w-6xl mx-auto">
        <h1 class="text-3xl font-bold text-center my-8">User Form</h1>

        <?php
        // Display success message if set
        if (isset($_SESSION['success'])) {
            echo '<div class="mb-4 p-4 bg-green-100 text-green-700 rounded">' . htmlspecialchars($_SESSION['success']) . '</div>';
            unset($_SESSION['success']);
        }
        // Display error message if set
        if (isset($_SESSION['error'])) {
            echo '<div class="mb-4 p-4 bg-red-100 text-red-700 rounded">' . htmlspecialchars($_SESSION['error']) . '</div>';
            unset($_SESSION['error']);
        }
        ?>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Form Section -->
            <div>
                <form action="process.php" method="post" class="p-6 bg-white rounded-lg shadow-md">
                    <!-- Details -->
                    <div class="flex flex-wrap justify-stretch gap-4">
                        <!-- Name -->
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                            <input type="text" id="name" name="name" required
                                class="mt-1 tracking-wide ps-2 py-2 block w-full border-gray-300 rounded shadow-sm focus:border-clifford focus:ring focus:ring-clifford focus:ring-opacity-50" />
                        </div>

                        <!-- Email -->
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                            <input type="email" id="email" name="email" required
                                class="mt-1 tracking-wide ps-2 py-2 block w-full border-gray-300 rounded shadow-sm focus:border-clifford focus:ring focus:ring-clifford focus:ring-opacity-50">
                        </div>

                        <!-- Mobile Number -->
                        <div class="mb-4">
                            <label for="mobile" class="block text-sm font-medium text-gray-700">Mobile No</label>
                            <input type="tel" id="mobile" name="mobile" pattern="[0-9]{10}" maxlength="10" minlength="10" required
                                class="mt-1 tracking-wide ps-2 py-2 block w-full border-gray-300 rounded shadow-sm focus:border-clifford focus:ring focus:ring-clifford focus:ring-opacity-50" />
                        </div>

                        <!-- DOB -->
                        <div class="mb-4">
                            <label for="dob" class="block text-sm font-medium text-gray-700">Date of Birth</label>
                            <input type="date" id="dob" name="dob" required
                                class="mt-1 tracking-wide ps-2 py-2 ps-2 block max-w-md w-full border-gray-300 rounded shadow-sm focus:border-clifford focus:ring focus:ring-clifford focus:ring-opacity-50" />
                        </div>
                    </div>

                    <!-- Gender -->
                    <div class="mb-4">
                        <label class="block text-sm font-medium text-gray-900 mb-1.5">Choose Gender</label>
                        <div class="flex items-center space-x-6">
                            <label class="inline-flex items-center cursor-pointer">
                                <input type="radio" name="gender" value="male" class="mr-2" required />
                                <span class="text-gray-700">Male</span>
                            </label>
                            <label class="inline-flex items-center cursor-pointer">
                                <input type="radio" name="gender" value="female" class="mr-2" required />
                                <span class="text-gray-700">Female</span>
                            </label>
                            <label class="inline-flex items-center cursor-pointer">
                                <input type="radio" name="gender" value="other" class="mr-2" required />
                                <span class="text-gray-700">Other</span>
                            </label>
                        </div>
                    </div>

                    <!-- Address -->
                    <div class="mb-4">
                        <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                        <textarea id="address" name="address" rows="3" required
                            class="mt-1 tracking-wide ps-2 block w-full border-gray-300 rounded shadow-sm focus:border-clifford focus:ring focus:ring-clifford focus:ring-opacity-50"></textarea>
                    </div>

                    <!-- Emp Type -->
                    <div class="mb-4">
                        <label for="emp_type" class="block text-sm font-medium text-gray-700">Employee Type</label>
                        <select id="emp_type" name="emp_type" required
                            class="mt-1 tracking-wide py-2 block w-full border-gray-300 rounded shadow-sm focus:border-clifford focus:ring focus:ring-clifford focus:ring-opacity-50 ps-1">
                            <option value="" selected>Select a Type</option>
                            <option value="regular">Regular</option>
                            <option value="remote">Remote</option>
                            <option value="hybrid">Hybrid</option>
                        </select>
                    </div>

                    <!-- Terms and Conditions -->
                    <div class="my-5">
                        <label class="inline-flex items-center">
                            <input type="checkbox" name="terms" required
                                class="form-checkbox h-4 w-4 text-clifford focus:ring-clifford focus:ring-opacity-50" />
                            <span class="ml-2 text-sm text-gray-700">I agree to the <a href="#"
                                    class="text-clifford hover:underline">Terms and Conditions</a></span>
                        </label>
                    </div>

                    <!-- Submit Button -->
                    <button type="submit"
                        class="w-full bg-clifford text-white font-bold py-2 px-4 rounded hover:bg-red-600 transition duration-200 cursor-pointer">Submit</button>
                </form>
            </div>

            <!-- Display Submitted Entries -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-2xl font-bold mb-4">Submitted Entries</h2>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Mobile</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">DOB</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Gender</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Address</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <?php
                            // Fetch and display submitted entries
                            $sql = "SELECT * FROM users ORDER BY created_at DESC LIMIT 10";
                            $result = mysqli_query($conn, $sql);

                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    //  echo "<pre>";
                                    //  print_r($row);

                                    
                                     
                                    echo "<tr class='hover:bg-gray-50'>";
                                    echo "<td class='px-6 py-4 whitespace-nowrap'>" . htmlspecialchars($row["name"]) . "</td>";
                                    echo "<td class='px-6 py-4 whitespace-nowrap'>" . htmlspecialchars($row["email"]) . "</td>";
                                    echo "<td class='px-6 py-4 whitespace-nowrap'>" . htmlspecialchars($row["mobile"]) . "</td>";
                                    echo "<td class='px-6 py-4 whitespace-nowrap'>" . htmlspecialchars($row["dob"]) . "</td>";
                                    echo "<td class='px-6 py-4 whitespace-nowrap'>" . htmlspecialchars($row["gender"]) . "</td>";
                                    echo "<td class='px-6 py-4 whitespace-nowrap'>" . htmlspecialchars($row["emp_type"]) . "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='4' class='px-6 py-4 text-center text-gray-500'>No entries found</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>