<?php require 'views/partials/header.view.php'; ?>
<?php require 'views/partials/banner.view.php'; ?>

<main>
<img src="../images/hero.jpg" alt="Hero Section">

<div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8"> 
    <!-- Hero Section--> 

    <!-- Categorized & Investments Section -->
    <div class="w-296 bg-white shadow rounded">
      <br>
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-3xl" align='center'>Deals</h2>
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


      <div>
        
      </div>
</div>
<br>
    <!-- Deal Records -->
    <div class="w-296 bg-white shadow rounded">
    <br>
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-3xl" align='center'>Records</h2>
      <div class="mx-auto my-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 pt-10 lg:mx-0 lg:max-w-none lg:grid-cols-3">
                    <?php foreach ($records as $record) { ?>
                    <article class="group relative flex max-w-xl flex-col items-start justify-between gap-5">
                        <div class="h-60 w-full overflow-hidden rounded-lg bg-gray-200">
                            <img src="<?php echo $record['cover_photo']; ?>" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="h-full w-full object-cover object-center group-hover:opacity-75">
                        </div>
                        <div class="flex w-full items-center justify-between gap-x-4 text-xs">
                            <span class="rounded-full bg-white px-3 py-1.5 font-medium text-gray-600"><?php echo ucwords( str_replace( '_', ' ', $record['startup_category'] ) ); ?></span>
                            <time datetime="<?php echo $record['created_at']; ?>" class="text-gray-500"><?php echo $record['created_at']; ?></time>
                        </div>
                        <div class="flex w-full items-center justify-between gap-x-4 text-sm">
                            <p class="text-gray-900">Investment: <span class="font-bold"><?php echo $record['ask_amount']; ?></span></p>
                            <p class="text-gray-900">Percentage: <span class="font-bold"><?php echo $record['ask_percentage']; ?></span></p>
                        </div>
                        <div class="">
                            <h3 class="text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                                <?php echo ucwords( $record['startup_name'] ); ?>
                            </h3>
                            <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600"><?php echo $record['executive_summary']; ?></p>
                        </div>
                        <div class="relative flex items-center gap-x-4">
                            <div class="text-sm leading-6">
                                <p class="font-semibold text-gray-900">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    <?php echo $record['meta_value']; ?>
                                </a>
                                </p>
                                <p class="text-gray-600"><?php echo $record['first_name'] .' '. $record['last_name']; ?></p>
                            </div>
                        </div>
                        <a href="/deal?id=<?php echo $record['id']; ?>">
                            <span class="absolute inset-0"></span>
                            <span class="sr-only">Read More</span>
                        </a>
                    </article>    
                    <?php } ?>
                </div>  
      <br>
      <div>
      </div>
</div>
<br>

    <!-- Review Section -->
    <div class="w-296 bg-white shadow rounded">
        <br>
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-3xl" align ='center'>Expert Review</h2>
      <br>
      <h2 class="text-3xl  tracking-tight text-gray-900 sm:text-xl" align= 'center'>Let's know about the platform from our experts' advices</h2>
      <div class="bg-white py-24 sm:py-2">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">

    <div class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-x-8 gap-y-16 border-t border-gray-200 pt-10 sm:mt-16 sm:pt-16 lg:mx-0 lg:max-w-none lg:grid-cols-3">
      <article class="flex max-w-xl flex-col items-start justify-between">
        <div class="flex items-center gap-x-4 text-xs">
          <time datetime="2020-03-16" class="text-gray-500">Aug 19, 2023</time>
          <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">Education</a>
        </div>
        <div class="group relative">
          <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
            <a href="#">
              <span class="absolute inset-0"></span>
              User-Centric and Informative Platform
            </a>
          </h3>
          <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">"The website serves as a well-designed and user-centric platform connecting entrepreneurs and investors. The interface is intuitive, allowing users to easily navigate through various sections. The educational content provided for both entrepreneurs and investors is comprehensive and insightful. The matchmaking feature stands out as a powerful tool, facilitating meaningful connections. Success stories of successful partnerships add credibility and inspiration to the platform. Overall, the website effectively bridges the gap between entrepreneurs seeking funding and investors looking for promising opportunities."</p>
        </div>
        <div class="relative mt-8 flex items-center gap-x-4">
          <img src="../images/UA.jfif" alt="" class="h-10 w-10 rounded-full bg-gray-50">
          <div class="text-sm leading-6">
            <p class="font-semibold text-gray-900">
              <a href="#">
                <span class="absolute inset-0"></span>
                Prof. Dr. Uzzal Kumar Acharjee
              </a>
            </p>
            <p class="text-gray-600">Chairman, CSE, Jagannath University</p>
          </div>
        </div>
      </article>
      <article class="flex max-w-xl flex-col items-start justify-between">
        <div class="flex items-center gap-x-4 text-xs">
          <time datetime="2020-03-16" class="text-gray-500">Aug 19, 2023</time>
          <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">EdTech</a>
        </div>
        <div class="group relative">
          <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
            <a href="#">
              <span class="absolute inset-0"></span>
              Invaluable Resource for Entrepreneurs and Investors
            </a>
          </h3>
          <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">"As an expert in the entrepreneurial and investment landscape, I find the website to be an invaluable resource for both aspiring entrepreneurs and seasoned investors. The content offered is not only educational but also practical, offering actionable advice and insights. The investor-entrepreneur matchmaking feature demonstrates a commitment to fostering collaboration and innovation. I appreciate the clarity and transparency in presenting investment opportunities and guiding entrepreneurs through the pitching process. Additionally, the incorporation of expert contributors and case studies showcases the platform's commitment to providing well-rounded perspectives. Overall, this website is poised to play a pivotal role in bringing together these two vital components of the business ecosystem."</p>
        </div>
        <div class="relative mt-8 flex items-center gap-x-4">
          <img src="../images/SS.png" alt="" class="h-10 w-10 rounded-full bg-gray-50">
          <div class="text-sm leading-6">
            <p class="font-semibold text-gray-900">
              <a href="#">
                <span class="absolute inset-0"></span>
                Dr. Sajeeb Saha
              </a>
            </p>
            <p class="text-gray-600">Associate Prefessor, CSE, Jagannath University</p>
          </div>
        </div>
      </article>
      <article class="flex max-w-xl flex-col items-start justify-between">
        <div class="flex items-center gap-x-4 text-xs">
          <time datetime="2020-03-16" class="text-gray-500">Aug 19, 2023</time>
          <a href="#" class="relative z-10 rounded-full bg-gray-50 px-3 py-1.5 font-medium text-gray-600 hover:bg-gray-100">IOT</a>
        </div>
        <div class="group relative">
          <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
            <a href="#">
              <span class="absolute inset-0"></span>
              Seamless Networking and Strategic Insights
            </a>
          </h3>
          <p class="mt-5 line-clamp-3 text-sm leading-6 text-gray-600">"As a professional deeply entrenched in the world of entrepreneurship and investments, I'm impressed by the website's approach to connecting entrepreneurs and investors. The platform's emphasis on networking is evident through its interactive forums, community engagement, and the opportunity for direct communication. The investment strategy guides and educational resources provide entrepreneurs and investors with strategic insights, helping them navigate the complex landscape. The site's commitment to user privacy and data security is evident, fostering a sense of trust among its users. To further enhance its value, regular updates with the latest industry trends and regulations would ensure its continued relevance."</p>
        </div>
        <div class="relative mt-8 flex items-center gap-x-4">
          <img src="../images/AL.jfif" alt="" class="h-10 w-10 rounded-full bg-gray-50">
          <div class="text-sm leading-6">
            <p class="font-semibold text-gray-900">
              <a href="#">
                <span class="absolute inset-0"></span>
                Dr. Md. Abu Layek
              </a>
            </p>
            <p class="text-gray-600">Associate Prefessor, CSE, Jagannath University</p>
          </div>
        </div>
      </article>
      <!-- More posts... -->
    </div>
  </div>
</div>
</div>
<br>
<!-- About Us Section -->
<div class="w-296 bg-white shadow rounded">
  <br>
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-3xl" align='center'>About Us</h2>
      <br>
      <div class="w-294 bg-white shadow rounded">
      <figure class="md:flex bg-slate-100 rounded-xl p-8 md:p-0 dark:bg-slate-800">
  <img class="w-24 h-24 md:w-48 md:h-auto md:rounded-none rounded-full mx-auto" src="../images/RHP.jpg" alt="" width="384" height="512">
  <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
    <blockquote>
     <p class="text-lg font-medium">
        “A. M. Rakib Hasan is currently studying Bsc. in Computer Science and Engineering in Jagannath University, Dhaka, Bangladesh. He is working on the path to become a successful entrepreneur and a business tycoon in the country.”
      </p> 
    </blockquote>
    <figcaption class="font-medium">
      <div class="text-sky-500 dark:text-sky-400">
        A. M. Rakib Hasan
      </div>
      <div class="text-slate-700 dark:text-slate-500">
        Student, CSE, Jagannath University
      </div>
    </figcaption>
  </div>
</figure>
</div>
<br>    
<div class="w-294 bg-white shadow rounded">
      <figure class="md:flex bg-slate-100 rounded-xl p-8 md:p-0 dark:bg-slate-800">
  <img class="w-24 h-24 md:w-48 md:h-auto md:rounded-none rounded-full mx-auto" src="../images/UML.jpg" alt="" width="384" height="512">
  <div class="pt-6 md:p-8 text-center md:text-left space-y-4">
    <blockquote>
      <p class="text-lg font-medium">
        “Umme Mehnza Labiba is a Computer Science student who is currently studying in Jagannath University. Her goal is to become an impactful woman entrepreneur of the country and serve the people.”
      </p>
    </blockquote>
    <figcaption class="font-medium">
      <div class="text-sky-500 dark:text-sky-400">
        Umme Mehnaz Labiba
      </div>
      <div class="text-slate-700 dark:text-slate-500">
      Student, CSE, Jagannath University
      </div>
    </figcaption>
  </div>
</figure>
<br>
</div>

</div>
<br>
    <!-- Contact Section -->
    <div class="w-296 bg-white shadow rounded">
      <br>
      <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-3xl" align='center'>Contact Us</h2>
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <div class="flex min-h-full flex-col justify-center px-6 py-12 lg:px-8">
                    <div class="mt-10 sm:mx-auto sm:w-full sm:max-w-lg">
                        <form class="space-y-6" action="index.view.php" method="POST">
                        <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                            <div class="sm:col-span-3">
                                <label for="first_name" class="block text-sm font-medium leading-6 text-gray-900">First Name</label>
                                <div class="mt-2">
                                <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="last_name" class="block text-sm font-medium leading-6 text-gray-900">Last Name</label>
                                <div class="mt-2">
                                <input type="text" name="last_name" id="last_name" autocomplete="family-name" class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>

                            <div class="sm:col-span-3">
                                <label for="phone_number" class="block text-sm font-medium leading-6 text-gray-900">Email Address</label>
                                <div class="mt-2">
                                <input type="text" name="phone_number" id="phone_number" autocomplete="family-name" class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>                      
                            <div class="sm:col-span-3">
                                <label for="phone_number" class="block text-sm font-medium leading-6 text-gray-900">Phone Number</label>
                                <div class="mt-2">
                                <input type="text" name="phone_number" id="phone_number" autocomplete="family-name" class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                </div>
                            </div>
                            <div class="sm:col-span-6">
                                <label for="pitch" class="block text-sm font-medium leading-6 text-gray-900">Message</label>
                                <div class="mt-2">
                                <textarea id="pitch" name="pitch" rows="3" class="block w-full rounded-md border-0 px-2 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                                </div>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm font-semibold leading-6 text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Send</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>

    </div>


</div> 
</main>

<?php require 'views/partials/footer.view.php'; ?>