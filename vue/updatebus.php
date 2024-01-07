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
      <h2 class="mb-4 text-xl font-bold text-gray-900 dark:text-white">update the bus</h2>
      <form  method ="GET">
        
          <div class="grid gap-4 sm:grid-cols-2 sm:gap-6">

              <div class="sm:col-span-2">
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"> immatriculer</label>
                  <input type="text"   value = "<?=$bus_info->getImmat()?>"   class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type immatriculer" required="">
             </div>
              <div class="sm:col-span-2">                                                                                                                                                                                                                           
                  <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">number of bus</label>
                  <input type="number" value = "<?=$bus_info->getNum_bus()?>" name="num_bus"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Type number of bus " required="">
              </div>
              <div class="w-full">
                  <label for="brand" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">capacitè</label>
                  <input type="number" value = "<?=$bus_info->getCapacité()?>" name="capcty"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="capacitè" required="">
              </div>
             
              <div>
                  <label class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">entreprise</label>
                  <select value = "<?=$bus_info->getEntreprise()?>" name = "entreprise" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                <?php
                
                  foreach($entreprise as $E){
                                   
                    echo "<option value=".$E->getName_entreprise().">".$E->getName_entreprise()."</option>";
            
                  }  
                  ?>
                  </select>
              </div>
             
          </div>
          <button   name="submit" value="<?=$bus_info->getImmat()?>" class="inline-flex bg-white items-center px-5 py-2.5 mt-4 sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
    update the bus
</button>

      </form>
  </div>
</section>       
</body>
</html>