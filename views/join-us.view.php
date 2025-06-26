<?php require 'views/partials/header.view.php'; ?>
<?php require 'views/partials/banner.view.php'; ?>
<?php 
$available_roles = get_available_role_for_user(); 
?>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
                    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-sm">
                        <form class="space-y-6" action="/join-us" method="POST" enctype="multipart/form-data">
                        <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-6">
                                <label for="role" class="block text-sm font-medium leading-6 text-gray-900">Role</label>
                                <div class="mt-2">
                                <select id="role" name="role" class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base sm:leading-6">
                                    <?php foreach( $available_roles as $role ) { ?>
                                        <option value="<?php echo $role; ?>"><?php echo ucfirst( $role ); ?></option>
                                    <?php } ?>
                                </select>
                                </div>
                            </div>
                            
                            <div class="sm:col-span-6">
                                <label for="company_name" class="block text-sm font-medium leading-6 text-gray-900">Company Name</label>
                                <div class="mt-2">
                                <input id="company_name" name="company_name" type="text" class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            
                            <div class="sm:col-span-6">
                                <label for="tin_no" class="block text-sm font-medium leading-6 text-gray-900">Tin No.</label>
                                <div class="mt-2">
                                <input id="tin_no" name="tin_no" type="text" class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            
                            <div class="sm:col-span-6">
                                <label for="bank_account_no" class="block text-sm font-medium leading-6 text-gray-900">Bank Account No.</label>
                                <div class="mt-2">
                                <input id="bank_account_no" name="bank_account_no" type="text" class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            
                            <div class="sm:col-span-6">
                                <label for="trade_license" class="block text-sm font-medium leading-6 text-gray-900">Trade License</label>
                                <div class="mt-2">
                                <input type="file" name="trade_license" accept=".pdf" class="relative m-0 block w-full min-w-0 flex-auto rounded border-0 shadow-sm ring-1 ring-inset ring-gray-300 bg-clip-padding px-3 py-[0.32rem] font-normal text-gray-700 file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-gray-300 file:px-3 file:py-[0.32rem] file:text-gray-900 file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem]">
                                </div>
                            </div>
                            
                            <div class="sm:col-span-6">
                                <label for="necessary_doc" class="block text-sm font-medium leading-6 text-gray-900">Necessary Document (Inc. Certificate, AOA, MOA)</label>
                                <div class="mt-2">
                                <input type="file" name="necessary_doc" accept=".pdf" class="relative m-0 block w-full min-w-0 flex-auto rounded border-0 shadow-sm ring-1 ring-inset ring-gray-300 bg-clip-padding px-3 py-[0.32rem] font-normal text-gray-700 file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-gray-300 file:px-3 file:py-[0.32rem] file:text-gray-900 file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem]">
                                </div>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Join Us</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
<?php require 'views/partials/footer.view.php'; ?>