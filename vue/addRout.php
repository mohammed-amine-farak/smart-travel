<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class ="bg-gray-900">
   <section class="bg-white  dark:bg-gray-900">
  <div class="py-8 px-4 mx-auto max-w-2xl lg:py-16">
      <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">add route</h2>
     
      <form  method ="POST">
        
        
          <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">

            
              <div class="sm:col-span-2">                                                                                                                                                                                                                           
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">distance</label>
                  <input type="number" name="destance"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type number of bus " required="">
              </div>
              <div class="w-full">
                  <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">dureè</label>
                  <input type="time"  name="dureè"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="capacitè" required="">
              </div>
             
              <div>
                  <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ville de départ</label>
                  <select  name = "depart" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                <?php
                
                  foreach($ville as $v){
                                   
                    echo "<option value=".$v->getNom_ville().">".$v->getNom_ville()."</option>";
            
                  }  
                  ?>
                  </select>
              </div>
              <div>
                  <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">ville de destination</label>
                  <select  name = "destination" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                <?php
                
                  foreach($ville as $v){
                                   
                    echo "<option value=".$v->getNom_ville().">".$v->getNom_ville()."</option>";
            
                  }  
                  ?>
                  </select>
              </div>
             
          </div>
          <button name="submit"  class="inline-flex bg-white items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
          add route
          </button>

      </form>
  </div>
</section>       
</body>
</html>