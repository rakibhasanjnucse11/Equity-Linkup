<?php require 'views/partials/header.view.php'; ?>
<?php require 'views/partials/banner.view.php'; ?>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6 my-10 pt-10">
                    <?php if( in_array( 'entrepreneur', $user_role ) ){ ?>
                    <div class="sm:col-span-3">
                        <h2 class="text-xl font-bold tracking-tight text-gray-900">As an entrepreneur</h2>
                        <p class="text-3xl leading-relaxed font-extralight text-gray-600"><?php echo $entrepreneur_company['meta_value']; ?></p>
                        <p class="text-2xl leading-relaxed font-extralight text-gray-600"><?php echo $user['first_name'] .' '. $user['last_name']; ?></p>
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
                    </div>
                    <?php } ?>
                    <?php if( in_array( 'investor', $user_role ) ){ ?>
                    <div class="sm:col-span-3">
                        <h2 class="text-xl font-bold tracking-tight text-gray-900">As an investor</h2>
                        <p class="text-3xl leading-relaxed font-extralight text-gray-600"><?php echo $investor_company['meta_value']; ?></p>
                        <p class="text-2xl leading-relaxed font-extralight text-gray-600"><?php echo $user['first_name'] .' '. $user['last_name']; ?></p>
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
                    </div>
                    <?php } ?>
                </div>
            </div>
        </main>
<?php require 'views/partials/footer.view.php'; ?>
