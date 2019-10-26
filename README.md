# Enviro-API

**Work In Progress**

The purpose of this project is to utilize Laravel as an API server and data store for a Raspberry Pi with an Enviro pHat. Each Enviro pHat Pi (client) can send JSON requests to the laravel application (server) which will validate and store the data and associate it with the client. This can then be interrogated with any tool that is capable of talking to a Laravel compatible API or database.


```
+------------------+            +------------+  +----------------+
|                  |            |            |  |                |
| client (kitchen) +----------->+            |  |                |
|                  |            |            |  |                |
+------------------+            |            |  |                |
                                |            |  |                |
+----------------------+        |            |  |                |
|                      |        |            |  |                |
| client (living room) +------->+    API     <-->    Database    |
|                      |        |            |  |                |
+----------------------+        |            |  |                |
                                |            |  |                |
+------------------+            |            |  |                |
|                  |            |            |  |                |
| Client (porch)   +----------->+            |  |                |
|                  |            |            |  |                |
+------------------+            +------+-----+  +--------+-------+
                                       |                 |
                                       |                 |
                                       |                 |
                                       |                 |
 +---------------------------+         |                 |
 |                           |         |                 |
 |Web Interface (Eg Graphana)+---------+-----------------+
 |                           |
 +---------------------------+

```


This project is very much work in progress at this time.
