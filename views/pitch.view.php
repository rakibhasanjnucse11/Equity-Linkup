<?php require 'views/partials/header.view.php'; ?>
<?php require 'views/partials/banner.view.php'; ?>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
                    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-lg">
                        <form class="space-y-6" action="/pitch" method="POST" enctype="multipart/form-data">
                        <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-6">
                                <label for="startup_name" class="block text-sm font-medium leading-6 text-gray-900">Startup Name</label>
                                <div class="mt-2">
                                <input type="text" name="startup_name" id="startup_name" class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-6">
                                <label for="startup_category" class="block text-sm font-medium leading-6 text-gray-900">Startup Category</label>
                                <div class="mt-2">
                                <select id="startup_category" name="startup_category" class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-base sm:leading-6">
                                    <option value="edtech">Edtech</option>
                                    <option value="fintech">Fintech</option>
                                    <option value="robotics">Robotics</option>
                                    <option value="artificial_intelligence">Artificial intelligence</option>
                                </select>
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Email address</label>
                                <div class="mt-2">
                                <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="website" class="block text-sm font-medium leading-6 text-gray-900">Website</label>
                                <div class="mt-2">
                                <input type="text" name="website" id="website" class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-6">
                                <label for="address" class="block text-sm font-medium leading-6 text-gray-900">Address</label>
                                <div class="mt-2">
                                <input type="text" name="address" id="address" class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="executive_summary" class="block text-sm font-medium leading-6 text-gray-900">Executive Summary</label>
                                <div class="mt-2">
                                <textarea id="executive_summary" name="executive_summary" rows="3" class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                                </div>
                            </div>
                            
                            <div class="sm:col-span-3">
                                <label for="financial_information" class="block text-sm font-medium leading-6 text-gray-900">Financial Information</label>
                                <div class="mt-2">
                                <textarea id="financial_information" name="financial_information" rows="3" class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                                </div>
                            </div>
                            
                            <div class="sm:col-span-3">
                                <label for="market_analysis" class="block text-sm font-medium leading-6 text-gray-900">Market Analysis</label>
                                <div class="mt-2">
                                <textarea id="market_analysis" name="market_analysis" rows="3" class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                                </div>
                            </div>
                            
                            <div class="sm:col-span-3">
                                <label for="business_plan" class="block text-sm font-medium leading-6 text-gray-900">Business Plan</label>
                                <div class="mt-2">
                                <textarea id="business_plan" name="business_plan" rows="3" class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                                </div>
                            </div>
                            
                            <div class="sm:col-span-3">
                                <label for="management_team" class="block text-sm font-medium leading-6 text-gray-900">Management Team</label>
                                <div class="mt-2">
                                <textarea id="management_team" name="management_team" rows="3" class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                                </div>
                            </div>
                            
                            <div class="sm:col-span-3">
                                <label for="use_of_funds" class="block text-sm font-medium leading-6 text-gray-900">Use of Funds</label>
                                <div class="mt-2">
                                <textarea id="use_of_funds" name="use_of_funds" rows="3" class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                                </div>
                            </div>
                            
                            <div class="sm:col-span-3">
                                <label for="exit_strategy" class="block text-sm font-medium leading-6 text-gray-900">Exit Strategy</label>
                                <div class="mt-2">
                                <textarea id="exit_strategy" name="exit_strategy" rows="3" class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                                </div>
                            </div>
                            
                            <div class="sm:col-span-3">
                                <label for="legal_risk_disclosures" class="block text-sm font-medium leading-6 text-gray-900">Legal Risk Disclosures</label>
                                <div class="mt-2">
                                <textarea id="legal_risk_disclosures" name="legal_risk_disclosures" rows="3" class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                                </div>
                            </div>
                            
                            <div class="sm:col-span-6">
                                <label for="pitch" class="block text-sm font-medium leading-6 text-gray-900">Pitch</label>
                                <div class="mt-2">
                                <textarea id="pitch" name="pitch" rows="3" class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="ask_amount" class="block text-sm font-medium leading-6 text-gray-900">Asking Investment Amount</label>
                                <div class="mt-2">
                                <input type="number" name="ask_amount" id="ask_amount" class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="ask_percentage" class="block text-sm font-medium leading-6 text-gray-900">Asking Sharing Percentage</label>
                                <div class="mt-2">
                                <input type="number" name="ask_percentage" autocomplete="given-name" class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-6">
                                <label for="document" class="block text-sm font-medium leading-6 text-gray-900">Supporting Document</label>
                                <div class="mt-2">
                                <input type="file" name="document" accept=".pdf" class="relative m-0 block w-full min-w-0 flex-auto rounded border-0 shadow-sm ring-1 ring-inset ring-gray-300 bg-clip-padding px-3 py-[0.32rem] font-normal text-gray-700 file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-gray-300 file:px-3 file:py-[0.32rem] file:text-gray-900 file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem]">
                                </div>
                            </div>
                            
                            <div class="sm:col-span-6">
                                <label for="cover_photo" class="block text-sm font-medium leading-6 text-gray-900">Cover Photo</label>
                                <div class="mt-2">
                                <input type="file" name="cover_photo" accept="image/*" class="relative m-0 block w-full min-w-0 flex-auto rounded border-0 shadow-sm ring-1 ring-inset ring-gray-300 bg-clip-padding px-3 py-[0.32rem] font-normal text-gray-700 file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-gray-300 file:px-3 file:py-[0.32rem] file:text-gray-900 file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem]">
                                </div>
                            </div>

                        </div>
                        <div>
                            <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit</button>
                        </div>
                        </form>

                    </div>
                </div>
            </div>
        </main>
<?php require 'views/partials/footer.view.php'; ?>