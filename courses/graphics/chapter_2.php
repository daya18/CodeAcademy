<!DOCTYPE html>

<div id="header">
    <h1 id="chapter-heading">Chapter 2: Drawing a triangle - Overview</h1>
    <h4 id="heading-fun">Hello world in graphics</h4>
</div>

<div id="content">
    <div class="section">
        <h3>Introduction:</h3>
        
        <p>
            Let's see an overview of rendering a triangle with OpenGL.
        </p>

        <p>
            The following few chapters will go into details on each step,
            and we'll learn about OpenGL objects like vertex buffer, vertex array and shader program.
        </p>   

        <p>
            Then we'll use them to draw our triangle, which will be our first step in making a screensaver
        </p>     
    </div> 
     
    <div class="section">
        <h3>Overview:</h3>
        <img class="image" src="/images/chapter_2/overview.png" alt="">  
    </div> 
    
    <div class="section">
        <h3>Vertices:</h3>
        <p>
            We have the list of vertices of our triangle. 
            and we wish to draw it with the GPU. but the GPU can't access your main system memory ( ram ).
            So we create a buffer in the GPU's local memory ( VRAM ), called vertex buffer, and put the vertices in it.
        </p>
        

        <p> A buffer is a contiguous region in memory. so the data in our vertex buffer will be: </p>
        
        <p>
             0.0,  0.5,</br>
             0.5, -0.5,</br>
            -0.5, -0.5,</br>
        </p>

        <p>
            But there is more. what if each vertex not only has a position but also a normal?
            we can store it interleaved in the same buffer, like:
        </p>
         
        <p>
             0.0,  0.5,  0.0,  1.0,</br>
             0.5, -0.5,  1.0, -1.0,</br>
            -0.5, -0.5, -1.0, -1.0</br>
        </p>
        
        <p>
        Where each vertex is represented by 2 floats for position and 2 floats for normal
        </p>

        <p>
            Or it can come from 2 vertex buffers with one just containing vertex positions and the other with normals.
        </p>

        <p>
            The thing is, in the end, it doesnt matter where the attributes for a vertex comes from,
            attribute meaning things like position or normal.
            All OpenGL cares about is a way to get the position and normal for a vertex.
            So another abstraction called vertex array exists. We bind the vertex buffer(s) to the vertex array,
            and give it the format information, like all data is interleaved or some attributes come from buffer 2 etc.
        </p>

        <p>
            Then we just bind the vertex array to the GPU
        </p>
    </div> 

    <div class="section">
        <h3>Shader Program:</h3>
        <p>
            A shader program is a program that runs in the GPU, to render an object from the vertices we gave it above.
            This is what makes modern graphics really powerful. 
            the ability of the user ( us ) to program the gpu instead of 
            just having built-in functions that e.g fills a polygon with a color
        </p>
            
        <p>A shader program consists of different shaders. But we will just focus on vertex and fragment, for now.</p>

        <p>
            A vertex shader runs for each vertex, and sets the final values for that vertex.
            This allows making things like camera and rotating objects.
        </p>

        <p>
            A fragment shader runs for each pixel covered by the object, and sets the color of the pixel.
            this allows for some really cool lighting and shadowing and all cool stuff [[contain excitement, be professional]]
        </p>

        <p>
            After we write the vertex and fragment shader sources, we create OpenGL shader objects for both. 
            then we bind them to a shader program, and bind the shader program to the GPU
        </p>
    </div>

    <div class="section">
        <h3>Drawing:</h3>
        
        <p>
            After binding the vertex array and shader program, we can just call the OpenGL draw function, and the triangle will appear!
        </p>
    </div>

</div>