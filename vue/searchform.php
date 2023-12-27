
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    ville dep
                </th>
                <th scope="col" class="px-6 py-3">
                    ville are
                </th>
                
                <th scope="col" class="px-6 py-3">
                  date  
                </th>
                <th scope="col" class="px-6 py-3">
                    persone
                </th>
                <th scope="col" class="px-6 py-3">
                    search
                </th>
               
            </tr>
        </thead>
        <form action="" method = "GET">
        <tbody>
           
        
        <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
             
                <td class="px-6 py-4">
                <div>
                 
                  <select name ="ville_dep"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                  <option selected="">Select ville</option>
                <?php
                foreach($villes as $ville){
                
                    echo "<option value=".$ville->getNom_ville().">".$ville->getNom_ville()."</option>";
                
                }
               
                ?>
                     
                  </select>
              </div>
                </td>
                
                <td class="px-6 py-4">
                <div>
                 
                 <select name ="ville_dep"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                 <option selected="">Select ville</option>
               <?php
               foreach($villes as $ville){
               
                   echo "<option value=".$ville->getNom_ville().">".$ville->getNom_ville()."</option>";
               
               }
              
               ?>
                    
                 </select>
             </div>
                </td>
                
                <td class="px-6 py-4">
                   <input name ="date" type="date">
                </td>

                <td class="px-6 py-4">
                <input type="number" name = "number_per" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="how many person" required="">
                </td>
                <td class="px-6 py-4">
                <button type="button" class="inline-flex  bg-slate-900 items-center px-5 py-2.5  sm:mt-6 text-sm font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800" >search</button>
                </td>

                
            </tr>
    
        </tbody>

        </form> 
    </table>
   
</div>
   
</body>
</html>
