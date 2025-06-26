<?php require 'views/partials/header.view.php'; ?>
<?php require 'views/partials/banner.view.php'; ?>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                
                <div class="mx-auto my-10 pt-10 lg:mx-0">
                    <div class="w-full overflow-hidden rounded-lg bg-gray-200">
                        <img src="<?php echo $pitch['cover_photo']; ?>" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
                    </div>
                    <div class="mt-16">
                        <h2 class="text-xl font-bold tracking-tight text-gray-900">Startup Name</h2>
                        <p class="mt-2 text-3xl leading-relaxed font-extralight text-gray-600"><?php echo $pitch['startup_name']; ?></p>
                    </div>
                    <div class="mt-16">
                        <h2 class="text-xl font-bold tracking-tight text-gray-900">Startup Category</h2>
                        <p class="mt-2 text-3xl leading-relaxed font-extralight text-gray-600"><?php echo $pitch['startup_category']; ?></p>
                    </div>
                    <div class="mt-16">
                        <h2 class="text-xl font-bold tracking-tight text-gray-900">Company</h2>
                        <p class="mt-2 text-3xl leading-relaxed font-extralight text-gray-600"><?php echo $pitch['meta_value']; ?></p>
                    </div>
                    <div class="mt-16">
                        <h2 class="text-xl font-bold tracking-tight text-gray-900">Founder</h2>
                        <p class="mt-2 text-3xl leading-relaxed font-extralight text-gray-600"><?php echo $pitch['first_name'] .' '. $pitch['last_name']; ?></p>
                        <a href="/user?id=<?php echo $pitch['user_id']; ?>" class="mt-2 inline-block rounded-full bg-white px-3 py-1.5 font-bold text-gray-600 text-xs">View Profile</a>
                    </div>
                    <div class="mt-16">
                        <h2 class="text-xl font-bold tracking-tight text-gray-900">Address</h2>
                        <p class="mt-2 text-3xl leading-relaxed font-extralight text-gray-600"><?php echo $pitch['address']; ?></p>
                    </div>
                    <div class="mt-16">
                        <h2 class="text-xl font-bold tracking-tight text-gray-900">Email</h2>
                        <p class="mt-2 text-3xl leading-relaxed font-extralight text-gray-600"><?php echo $pitch['email']; ?></p>
                    </div>
                    <div class="mt-16">
                        <h2 class="text-xl font-bold tracking-tight text-gray-900">Website</h2>
                        <p class="mt-2 text-3xl leading-relaxed font-extralight text-gray-600"><?php echo $pitch['website']; ?></p>
                    </div>
                    <div class="mt-16">
                        <h2 class="text-xl font-bold tracking-tight text-gray-900">Executive Summary</h2>
                        <p class="mt-2 text-3xl leading-relaxed font-extralight text-gray-600"><?php echo $pitch['executive_summary']; ?></p>
                    </div>
                    <div class="mt-16">
                        <h2 class="text-xl font-bold tracking-tight text-gray-900">Financial Information</h2>
                        <p class="mt-2 text-3xl leading-relaxed font-extralight text-gray-600"><?php echo $pitch['financial_information']; ?></p>
                    </div>
                    <div class="mt-16">
                        <h2 class="text-xl font-bold tracking-tight text-gray-900">Market Analysis</h2>
                        <p class="mt-2 text-3xl leading-relaxed font-extralight text-gray-600"><?php echo $pitch['market_analysis']; ?></p>
                    </div>
                    <div class="mt-16">
                        <h2 class="text-xl font-bold tracking-tight text-gray-900">Business Plan</h2>
                        <p class="mt-2 text-3xl leading-relaxed font-extralight text-gray-600"><?php echo $pitch['business_plan']; ?></p>
                    </div>
                    <div class="mt-16">
                        <h2 class="text-xl font-bold tracking-tight text-gray-900">Management Team</h2>
                        <p class="mt-2 text-3xl leading-relaxed font-extralight text-gray-600"><?php echo $pitch['management_team']; ?></p>
                    </div>
                    <div class="mt-16">
                        <h2 class="text-xl font-bold tracking-tight text-gray-900">Use of Funds</h2>
                        <p class="mt-2 text-3xl leading-relaxed font-extralight text-gray-600"><?php echo $pitch['use_of_funds']; ?></p>
                    </div>
                    <div class="mt-16">
                        <h2 class="text-xl font-bold tracking-tight text-gray-900">Exit Strategy</h2>
                        <p class="mt-2 text-3xl leading-relaxed font-extralight text-gray-600"><?php echo $pitch['exit_strategy']; ?></p>
                    </div>
                    <div class="mt-16">
                        <h2 class="text-xl font-bold tracking-tight text-gray-900">Legal Risk Disclosures</h2>
                        <p class="mt-2 text-3xl leading-relaxed font-extralight text-gray-600"><?php echo $pitch['legal_risk_disclosures']; ?></p>
                    </div>
                    <div class="mt-16">
                        <h2 class="text-xl font-bold tracking-tight text-gray-900">Pitch</h2>
                        <p class="mt-2 text-3xl leading-relaxed font-extralight text-gray-600"><?php echo $pitch['pitch']; ?></p>
                    </div>
                    <div class="mt-16">
                        <h2 class="text-xl font-bold tracking-tight text-gray-900">Asking Investment Amount</h2>
                        <p class="mt-2 text-3xl leading-relaxed font-extralight text-gray-600"><?php echo $pitch['ask_amount']; ?></p>
                    </div>
                    <div class="mt-16">
                        <h2 class="text-xl font-bold tracking-tight text-gray-900">Asking Sharing Percentage</h2>
                        <p class="mt-2 text-3xl leading-relaxed font-extralight text-gray-600"><?php echo $pitch['ask_percentage']; ?></p>
                    </div>
                 <!--   <div class="mt-16">
                        <h2 class="text-xl font-bold tracking-tight text-gray-900">Supporting Document</h2>
                        <p class="mt-2 text-3xl leading-relaxed font-extralight text-gray-600">
                            <a href="<?php echo $pitch['document']; ?>" target="_blank">Click Me</a>
                        </p>
                    </div> -->
                    <div class="mt-16">
                        <h2 class="text-xl font-bold tracking-tight text-gray-900">Date</h2>
                        <p class="mt-2 text-3xl leading-relaxed font-extralight text-gray-600"><?php echo $pitch['created_at']; ?></p>
                    </div>
                    <?php 
                    if ( 
                        $logged_in_user !== false 
                        && in_array( 'investor', get_user_role() )
                        && $logged_in_user['id'] !== $pitch['user_id'] ) {
                    ?>
                    <div class="mt-16">
                        <h2 class="text-3xl font-bold tracking-tight text-gray-900">Want to give a offer?</h2>
                        <form method="POST" action="/deal">
                            <input type="hidden" name="pitch_id" value="<?php echo $pitch['id']; ?>">
                            <input type="hidden" name="user_id" value="<?php echo $logged_in_user['id']; ?>">
                            <div class="mt-5 sm:w-full sm:max-w-lg">
                                <div class="grid grid-cols-1 gap-6 sm:grid-cols-6">
                                    <div class="sm:col-span-3">
                                        <label for="ask_amount" class="block text-sm font-medium leading-6 text-gray-900">Investment Amount</label>
                                        <div class="mt-2">
                                            <input type="number" name="ask_amount" id="ask_amount" class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="<?php echo $pitch['ask_amount']; ?>">
                                        </div>
                                    </div>
                                    <div class="sm:col-span-3">
                                        <label for="ask_percentage" class="block text-sm font-medium leading-6 text-gray-900">Sharing Percentage</label>
                                        <div class="mt-2">
                                            <input type="number" name="ask_percentage" id="ask_percentage" class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" value="<?php echo $pitch['ask_percentage']; ?>">
                                        </div>
                                    </div>
                                    <div class="sm:col-span-6">
                                        <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <?php } ?>
                </div>    
                
            </div>
        </main>
<?php require 'views/partials/footer.view.php'; ?>