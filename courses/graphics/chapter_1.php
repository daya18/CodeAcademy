<!DOCTYPE html>

<div id="header">
    <h1 id="chapter-heading">Chapter 1: Window</h1>
    <h4 id="heading-fun">The canvas for our art.</h4>
</div>

<div id="content">
    <div class="section">
        <h3> Introduction: </h3>

        <p>
            If you are viewing this in a computer, you probably already know what a window is.
            In this chapter, we'll be creating a window,
            which is just a portion of the screen for us to draw our beautiful screensaver in
        </p>

        <p>
            Creating a window is not easy. it is very low level and has platform specific ways.
            luckily for us, we have a library called GLFW that simplifies it
        </p>
    </div>

    <div class="section">
        <h3> Code: </h3>

<pre><code class="code language-cpp">void glfwErrorCallback ( int code, const char* description )
{
    std::cout << "GLFW Error " << code << ": " << description << std::endl;
}

int main()
{
    glfwSetErrorCallback ( glfwErrorCallback );
    glfwInit ();

    GLFWwindow* window = glfwCreateWindow ( 1000, 800, "ScreenSaver", nullptr, nullptr );

    glfwMakeContextCurrent ( window );
    gladLoadGL ();

    while ( ! glfwWindowShouldClose ( window ) )
    {
        glClearColor ( 0, 0, 0, 1 );
        glClear ( GL_COLOR_BUFFER_BIT );

        glfwSwapBuffers ( window );
        glfwPollEvents ();
    }

    return 0;
}</code></pre>

    </div>

    <div class="section">

        <h3> Code breakdown: </h3>

        <img class="image" src="/images/chapter_1/breakdown_1.png" alt="">
        <p>We do some error handling, initialize the window management library, GLFW</p>

        <img class="image" src="/images/chapter_1/breakdown_2.png" alt="">
        <p>It will be a fixed sized window named ScreenSaver</p>

        <img class="image" src="/images/chapter_1/breakdown_3.png" alt="">
        <p>We want to be able to draw to this window with OpenGL. So we do some initialization for that</p>

        <img class="image" src="/images/chapter_1/breakdown_4.png" alt="">
        <p>
            Main loop. it runs repeatedly until the user presses the close button,
            and now just clears the screen and handles input ( like close button press )
        </p>

    </div>

    <div class="section">
        <h3> End result: </h3>
        <img class="image" src="/images/chapter_1/result.png" alt="">
        Beautiful!
    </div>

</div>
