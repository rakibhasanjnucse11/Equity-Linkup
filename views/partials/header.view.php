<?php 
$logged_in_user = get_logged_in_user();
?>
<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equity Linkup</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="h-full">
    <div class="min-h-full">
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <a href="/" class="text-3xl font-bold tracking-tight text-white">
                                Equity Linkup
                            </a>
                        </div>
                        <div class="">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <a href="/deals" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Deals</a>
                                <a href="/records" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Records</a>
                                <?php if ( $logged_in_user && count( get_user_role() ) < 2 ) { ?>
                                <a href="/join-us" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Join Us</a>
                                <?php } ?>
                                <?php if ( $logged_in_user && in_array( 'entrepreneur', get_user_role() ) ) { ?>
                                <a href="/pitch" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Pitch</a>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="ml-4 flex items-center md:ml-6">
                            <div class="relative ml-3">
                                <?php 
                                if ( get_logged_in_user() === false ) {
                                ?>
                                <a href="/sign-in" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Sign In</a>
                                <a href="/sign-up" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Sign Up</a>
                                <?php 
                                } else {
                                ?>
                                <a href="/dashboard" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium"><?php echo $logged_in_user['first_name'] .' '. $logged_in_user['last_name'];?></a>
                                <a href="/sign-out" class="text-gray-300 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-sm font-medium">Sign Out</a>
                                <?php 
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>