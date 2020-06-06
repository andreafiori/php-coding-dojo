# Active Object pattern

The **active object** design pattern decouples method execution from method invocation for objects that each reside in their own thread of control. The goal is to introduce concurrency, by using asynchronous method invocation and a scheduler for handling requests.

The pattern consists of six elements:

- A proxy, which provides an interface towards clients with publicly accessible methods.
- An interface which defines the method request on an active object.
- A list of pending requests from clients.
- A scheduler, which decides which request to execute next.
- The implementation of the active object method.
- A callback or variable for the client to receive the result.