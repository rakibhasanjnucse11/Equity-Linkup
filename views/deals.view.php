<?php require 'views/partials/header.view.php'; ?>
<?php require 'views/partials/banner.view.php'; ?>
        <main>
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                    
                <div class="mx-auto my-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 pt-10 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                    <?php foreach ($pitches as $pitch) { ?>
                    <article class="group relative flex max-w-xl flex-col items-start justify-between gap-5">
                        <div class="h-60 w-full overflow-hidden rounded-lg bg-gray-200">
                            <img src="<?php echo $pitch['cover_photo']; ?>" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
                        </div>
                        <div class="flex w-full items-center justify-between gap-x-4 text-xs">
                            <span class="rounded-full bg-white px-3 py-1.5 font-medium text-gray-600"><?php echo ucwords( str_replace( '_', ' ', $pitch['startup_category'] ) ); ?></span>
                            <time datetime="<?php echo $pitch['created_at']; ?>" class="text-gray-500"><?php echo $pitch['created_at']; ?></time>
                        </div>
                        <div class="flex w-full items-center justify-between gap-x-4 text-sm">
                            <p class="text-gray-900">Investment: <span class="font-bold"><?php echo $pitch['ask_amount']; ?></span></p>
                            <p class="text-gray-900">Percentage: <span class="font-bold"><?php echo $pitch['ask_percentage']; ?></span></p>
                        </div>
                        <div class="">
                            <h3 class="text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                                <?php echo ucwords( $pitch['startup_name'] ); ?>
                            </h3>
                            <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600"><?php echo $pitch['executive_summary']; ?></p>
                        </div>
                        <div class="relative flex items-center gap-x-4">
                            <div class="text-sm leading-6">
                                <p class="font-semibold text-gray-900">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    <?php echo $pitch['meta_value']; ?>
                                </a>
                                </p>
                                <p class="text-gray-600"><?php echo $pitch['first_name'] .' '. $pitch['last_name']; ?></p>
                            </div>
                        </div>
                        <a href="/deal?id=<?php echo $pitch['id']; ?>">
                            <span class="absolute inset-0"></span>
                            <span class="sr-only">Read More</span>
                        </a>
                    </article>    
                    <?php } ?>
                </div>    
                
            </div>
        </main>
<?php require 'views/partials/footer.view.php'; ?>