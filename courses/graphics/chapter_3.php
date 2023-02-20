<!DOCTYPE html>

<div id="header">
    <h1 id="chapter-heading">Chapter 3: OpenGL Error Handling</h1>
    <h4 id="heading-fun"></h4>
</div>

<div id="content">
    <div class="section">
        <h3>Introduction:</h3>
        
        <p>
            Before we begin, let's just quickly setup OpenGL error handling,
            so we get errors printed to the console instead of, well, nothing.
            just a black screen with no clue of what is wrong
        </p>
        
    </div>
    
    <div class="section">
        <h3>Callback:</h3>
        
        <p>
            OpenGL can take a callback to be called when an error happens. Let's define ours.
            <img class="image" src="/images/chapter_3/Callback.png" alt="">
            It just prints the message, With severity converted to string
        </p>
    </div>

    <div class="section">
        <h3>Setup:</h3>

        <p>We have multiple things to do, to get it to work.</p>
        
        <p>
            First, we need to make GLFW create the OpenGL context in debug mode.
            An OpenGL context is created behind the scenes when we create a window.
            So before creating the window, we set a GLFW hint.
        </p>
        <img class="image" src="/images/chapter_3/DebugContext.png" alt="">

        <p>Then we enable debug output, and make it use our callback function</p>
        <img class="image" src="/images/chapter_3/EnableDebugOutput.png" alt="">

    </div>
    
    <div class="section">
        <h3>Testing:</h3>

        <p>Now let's test it!</p>
        <p>By seeing what happens if we delibrately make an error. The window clear function...</p>
        <img class="image" src="/images/chapter_3/Test.png" alt="">
        <p>Nice. now let's see what happens if we run it</p>
        <img class="image" src="/images/chapter_3/TestResult.png" alt="">
        <p>Perfect</p>
        <p>Note: it is being printed every frame ( when the clear function is called )</p>

    </div>


</div>