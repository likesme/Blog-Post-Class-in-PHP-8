# Blog Post Class in PHP 8
This code demonstrates a simple BlogPost class using Object-Oriented Programming (OOP) concepts in PHP 8.

Class Definition:

The BlogPost class defines properties for the title, content, and author of a blog post.
The constructor initializes these properties during object creation. The author property has a default value of "Anonymous" using the nullish coalescing operator (??).
The getExcerpt() method extracts a snippet (default 100 characters) from the content property and adds an ellipsis (...) at the end. It uses a static return type (string) for clarity.
Usage:

The example creates a new BlogPost object with a title, content, and leaves the author as the default ("Anonymous").
It then prints the title and calls the getExcerpt() method to display a snippet of the content.
Learning Points:

- This example showcases:
- Class definition and properties.
- Using a constructor for object initialization.
- Default values with the nullish coalescing operator (??).
- Defining and using methods.
- Static return types for better code readability.