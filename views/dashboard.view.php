Istiaq Hossain
<?php require 'views/partials/header.view.php'; ?>
<?php require 'views/partials/banner.view.php'; ?>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 my-10 pt-10">
                    <?php if( in_array( 'entrepreneur', $logged_in_user_role ) ){ ?>
                    <div class="sm:col-span-3">
                        <h2 class="text-xl font-bold tracking-tight text-gray-900">As an entrepreneur</h2>
                        <p class="text-3xl leading-relaxed font-extralight text-gray-600"><?php echo $entrepreneur_company['meta_value']; ?></p>
                        <p class="text-2xl leading-relaxed font-extralight text-gray-600"><?php echo $logged_in_user['first_name'] .' '. $logged_in_user['last_name']; ?></p>
                        <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-3">
                                <h2 class="text-xl font-bold tracking-tight text-gray-900">Accepted Pitch</h2>
                                <p class="text-3xl leading-relaxed font-extralight text-gray-600"><?php echo $total_accepted_pitches; ?></p>
                            </div>
                            <div class="sm:col-span-3">
                                <h2 class="text-xl font-bold tracking-tight text-gray-900">Amount of Accepted Pitch</h2>
                                <p class="text-3xl leading-relaxed font-extralight text-gray-600"><?php echo $total_accepted_pitch_amount; ?></p>
                            </div>
                        </div>
                        <div class="mt-10">
                            <h2 class="text-xl font-bold tracking-tight text-gray-900">Pitches</h2>
                            <?php 
                            foreach ($pitches as $pitch) {
                            ?>
                                <div class="mt-5">
                                    <p class="text-lg">
                                        <span class="font-semibold">Startup:</span> 
                                        <span class="font-extralight text-xl"><?php echo $pitch['startup_name']; ?></span>
                                    </p>
                                    <p class="text-lg">
                                        <span class="font-semibold">Category:</span> 
                                        <span  class="font-extralight text-xl"><?php echo $pitch['startup_category']; ?></span>
                                    </p>
                                    <p class="text-lg">
                                        <span class="font-semibold">Investment Amount:</span> 
                                        <span class="font-extralight text-xl"><?php echo $pitch['ask_amount']; ?></span>
                                    </p>
                                    <p class="text-lg">
                                        <span class="font-semibold">Sharing Percentage:</span> 
                                        <span class="font-extralight text-xl"><?php echo $pitch['ask_percentage']; ?></span>
                                    </p>
                                    <p>
                                        <a href="/deal?id=<?php echo $pitch['id']; ?>" class="mt-2 inline-block rounded-full bg-white px-3 py-1.5 font-bold text-gray-600 text-xs">View</a>
                                    </p>
                                </div>
                            
                            <?php if ( count( $pitch['offers'] ) > 0 ) { ?>
                                <div class="mt-5 pl-10">
                                    <h2 class="text-xl font-bold tracking-tight text-gray-900">Offers got</h2>
                                        <?php foreach ($pitch['offers'] as $offer) { ?>
                                            <div class="mt-5">
                                            <p class="text-lg">
                                                <span class="font-semibold">Company:</span> 
                                                <span class="font-extralight text-xl"><?php echo $offer['meta_value']; ?></span>
                                            </p>
                                            <p class="text-lg">
                                                <span class="font-semibold">Founder:</span> 
                                                <span  class="font-extralight text-xl"><?php echo $offer['first_name'] .' '. $offer['last_name']; ?></span>
                                            </p>
                                            <p class="text-lg">
                                                <span class="font-semibold">Investment Amount:</span> 
                                                <span class="font-extralight text-xl"><?php echo $offer['ask_amount']; ?></span>
                                            </p>
                                            <p class="text-lg">
                                                <span class="font-semibold">Sharing Percentage:</span> 
                                                <span class="font-extralight text-xl"><?php echo $offer['ask_percentage']; ?></span>
                                            </p>
                                            <p class="text-lg">
                                                <span class="font-semibold">Status:</span> 
                                                <span class="font-extralight text-xl"><?php echo $offer['status']; ?></span>
                                            </p>
                                            <?php if ( $offer['status'] == 'pending' ) { ?>
                                            <div class="text-lg flex gap-2 items-center">
                                                <span class="font-semibold">Action:</span> 
                                                <form action="/offer" method="post">
                                                    <input type="hidden" name="offer_id" value="<?php echo $offer['id']; ?>">
                                                    <input type="hidden" name="status" value="denied">
                                                    <button type="submit" class=" inline-block rounded-full bg-white px-3 py-1.5 font-bold text-gray-600 text-xs">Deny</button>
                                                </form>
                                                <form action="/offer" method="post">
                                                    <input type="hidden" name="offer_id" value="<?php echo $offer['id']; ?>">
                                                    <input type="hidden" name="status" value="accepted">
                                                    <button type="submit" class=" inline-block rounded-full bg-white px-3 py-1.5 font-bold text-gray-600 text-xs">Accept</button>
                                                </form>
                                                
                                            </div>
                                            <?php } ?>
                                            <p>
                                                <a href="/user?id=<?php echo $offer['user_id']; ?>" class="mt-2 inline-block rounded-full bg-white px-3 py-1.5 font-bold text-gray-600 text-xs">View Profile</a>
                                            </p>
                                        </div>    
                                    <?php } ?>
                                </div>
                            <?php } ?>

                            <?php 
                            }
                            ?>
                        </div>
                    </div>
                    <?php } ?>
                    <?php if( in_array( 'investor', $logged_in_user_role ) ){ ?>
                    <div class="sm:col-span-3">
                        <h2 class="text-xl font-bold tracking-tight text-gray-900">As an investor</h2>
                        <p class="text-3xl leading-relaxed font-extralight text-gray-600"><?php echo $investor_company['meta_value']; ?></p>
                        <p class="text-2xl leading-relaxed font-extralight text-gray-600"><?php echo $logged_in_user['first_name'] .' '. $logged_in_user['last_name']; ?></p>
                        <div class="mt-5 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-3">
                                <h2 class="text-xl font-bold tracking-tight text-gray-900">Accepted Offers</h2>
                                <p class="text-3xl leading-relaxed font-extralight text-gray-600"><?php echo $total_accepted_offers; ?></p>
                            </div>
                            <div class="sm:col-span-3">
                                <h2 class="text-xl font-bold tracking-tight text-gray-900">Amount of Accepted Offers</h2>
                                <p class="text-3xl leading-relaxed font-extralight text-gray-600"><?php echo $total_accepted_offer_amount; ?></p>
                            </div>
                        </div>
                        <div class="mt-10">
                            <h2 class="text-xl font-bold tracking-tight text-gray-900">Offers</h2>
                            <?php 
                            foreach ($offers as $offer) {
                            ?>
                            <div class="mt-5">
                                <p class="text-lg">
                                    <span class="font-semibold">Startup:</span> 
                                    <span class="font-extralight text-xl"><?php echo $offer['startup_name']; ?></span>
                                </p>
                                <p class="text-lg">
                                    <span class="font-semibold">Category:</span> 
                                    <span  class="font-extralight text-xl"><?php echo $offer['startup_category']; ?></span>
                                </p>
                                <p class="text-lg">
                                    <span class="font-semibold">Investment Amount:</span> 
                                    <span class="font-extralight text-xl"><?php echo $offer['ask_amount']; ?></span>
                                </p>
                                <p class="text-lg">
                                    <span class="font-semibold">Sharing Percentage:</span> 
                                    <span class="font-extralight text-xl"><?php echo $offer['ask_percentage']; ?></span>
                                </p>
                                <p class="text-lg">
                                    <span class="font-semibold">Status:</span> 
                                    <span class="font-extralight text-xl"><?php echo $offer['status']; ?></span>
                                </p>
                                <p>
                                    <a href="/deal?id=<?php echo $offer['pitch_id']; ?>" class="mt-2 inline-block rounded-full bg-white px-3 py-1.5 font-bold text-gray-600 text-xs">View</a>
                                </p>
                            </div>
                            <?php 
                            }
                            ?>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </main>
<?php require 'views/partials/footer.view.php'; ?>