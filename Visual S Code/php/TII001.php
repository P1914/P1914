<html lang="en">
<head>
    <h1>Name</h1>
</head>
<body class="flex items-center justify-center min-h-screen bg-white">
    <action="TII002.php" method="POST" class="space-y-4">

        <div class="flex items-center space-x-2">
            <label for="name" class="text-black">Name</label>
            <input type="text" id="name" name="name" class="border border-red-500 p-1" required>
        </div>


        <div class="flex items-center space-x-3">
            <label class="text-black">Sex :</label>
            <input type="radio" id="male" name="sex" value="Male" >
            <label for="male" class="text-black">Male</label>
            <input type="radio" id="female" name="sex" value="Female" >
            <label for="female" class="text-black">Female</label>
        </div>


        <div class="flex items-center space-x-4">
            <label for="dob" class="text-black">Date of Birth</label>
            <input type="date" id="dob" name="dob" class="border border-red-500 p-1" required>
        </div>


        <div class="flex items-center space-x-5">
            <label for="pob" class="text-black">Place of Birth</label>
            <input type="text" id="pob" name="pob" class="border border-red-500 p-1" required>
        </div>
        



        <div class="flex items-center space-x-6">
            <label class="text-black">Place of birth :</label> </div>
            <input type="radio" id="male" name="sex" value="Male" class="border border-red-500 p-1" required>
            <label for="male" class="text-black">kampong cham</label></br>
            <input type="radio" id="female" name="sex" value="Female" class="border border-red-500 p-1" required>
            <label for="female" class="text-black">Svay rieng</label></br>
            <input type="radio" id="female" name="sex" value="Female" class="border border-red-500 p-1" required>
            <label for="female" class="text-black">Takeo</label>
        </div>


        


        <div class="flex items-center space-x-7">
            <label class="text-black">Skill :</label> </div>
            <input type="radio" id="male" name="sex" value="Male" class="border border-red-500 p-1" required>
            <label for="male" class="text-black">sale</label>
</br>
            <input type="radio" id="female" name="sex" value="Female" class="border border-red-500 p-1" required>
            <label for="female" class="text-black">if</label>
</br>
            <input type="radio" id="female" name="sex" value="Female" class="border border-red-500 p-1" required>
            <label for="female" class="text-black">Markeing</label>
</br>
            <input type="radio" id="female" name="sex" value="Female" class="border border-red-500 p-1" required>
            <label for="female" class="text-black">Manager</label>
        </div>

        <div class="flex items-center space-x-8">
            <label class="text-black">Hobby :</label> </div>
            <input type="text" id="name" name="name" class="border border-red-500 p-1" required>
            

        </div>
        
        
        <div class="flex items-center space-x-9">
            <label class="text-black">Hobby :</label> </div>
            <input type="radio" id="male" name="sex" value="Male" class="border border-red-500 p-1" required>
            <label for="male" class="text-black">Swimming</label></br>
            <input type="radio" id="female" name="sex" value="Female" class="border border-red-500 p-1" required>
            <label for="female" class="text-black">Reading</label></br>
            <input type="radio" id="female" name="sex" value="Female" class="border border-red-500 p-1" required>
            <label for="female" class="text-black">Riding bike</label></br>
            <input type="radio" id="female" name="sex" value="Female" class="border border-red-500 p-1" required>
            <label for="female" class="text-black">Foothall</label></br>
            <input type="radio" id="female" name="sex" value="Female" class="border border-red-500 p-1" required>
            <label for="female" class="text-black">Other</label>
        </div>


        
    <div>
                <button type="submit" class="bg-blue-500 text-white p-2 rounded">Send</button>
            </div>
    </form>
</body>
</html>