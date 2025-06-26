<?php require 'views/partials/header.view.php'; ?>
<?php require 'views/partials/banner.view.php'; ?>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
                    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-lg">
                        <form class="space-y-6" action="/sign-up" method="POST">
                        <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-3">
                                <label for="first_name" class="block text-sm font-medium leading-6 text-gray-900">First name</label>
                                <div class="mt-2">
                                <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="last_name" class="block text-sm font-medium leading-6 text-gray-900">Last name</label>
                                <div class="mt-2">
                                <input type="text" name="last_name" id="last_name" autocomplete="family-name" class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-6">
                                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                                <div class="mt-2">
                                <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="password" class="block text-sm font-medium leading-6 text-gray-900">Password</label>
                                <div class="mt-2">
                                <input type="password" name="password" id="password" autocomplete="given-name" class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="confirm_password" class="block text-sm font-medium leading-6 text-gray-900">Confirm Password</label>
                                <div class="mt-2">
                                <input type="password" name="confirm_password" id="confirm_password" autocomplete="family-name" class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="address" class="block text-sm font-medium leading-6 text-gray-900">Address</label>
                                <div class="mt-2">
                                <input type="text" name="address" id="address" autocomplete="given-name" class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="phone_number" class="block text-sm font-medium leading-6 text-gray-900">Phone Number</label>
                                <div class="mt-2">
                                <input type="text" name="phone_number" id="phone_number" autocomplete="family-name" class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                        </div>
                        <div class="mt-10 space-y-10">
                            <fieldset>
                                <legend class="text-sm font-semibold leading-6 text-gray-900">Gender</legend>
                                <div class="mt-2 flex gap-x-5">
                                    <div class="flex items-center gap-x-3">
                                        <input id="push-everything" name="gender" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" value="male">
                                        <label for="push-everything" class="block text-sm font-medium leading-6 text-gray-900">Male</label>
                                    </div>
                                    <div class="flex items-center gap-x-3">
                                        <input id="push-email" name="gender" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" value="female">
                                        <label for="push-email" class="block text-sm font-medium leading-6 text-gray-900">Female</label>
                                    </div>
                                    <div class="flex items-center gap-x-3">
                                        <input id="push-nothing" name="gender" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-600" value="other">
                                        <label for="push-nothing" class="block text-sm font-medium leading-6 text-gray-900">Other</label>
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div>
                            <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign up</button>
                        </div>
                        </form>

                        <p class="mt-10 text-center text-sm text-gray-500">
                        Already a member?
                        <a href="/sign-in" class="font-semibold leading-6 text-indigo-600 hover:text-indigo-500">Sign In</a>
                        </p>
                    </div>
                </div>
            </div>
        </main>
<?php require 'views/partials/footer.view.php'; ?>