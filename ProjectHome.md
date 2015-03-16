Closing and reopening Google Code issues via PHPUnit tests.

Inspired by Raphael Stolt's article [Closing and reopening GitHub issues via PHPUnit tests](http://raphaelstolt.blogspot.com/2010/01/closing-and-reopening-github-issues-via.html). Read this article about how to use PHPUnit's ticket listeners.

Example configuration:

```
<phpunit>
  <listeners>
    <listener class="PHPUnit_Extensions_TicketListener_GoogleCode" 
              file="/path/to/PHPUnit/Extensions/TicketListener/GoogleCode.php">
      <arguments>
        <string>GOOGLE_ACCOUNT_EMAIL</string>
        <string>GOOGLE_ACCOUNT_PASSWORD</string>
        <string>GOOGLE_CODE_PROJECT_NAME</string>
        <boolean>true</boolean>
        <string>Fixed</string>
        <string>Started</string>
      </arguments>
    </listener>
  </listeners>
</phpunit>
```

Arguments:
  1. Your Google Account email
  1. Your Google Account password
  1. The project name on Google Code
  1. Whether to print ticket status changes in the test result
  1. The closed status of the issues
  1. The reopened status of the issues (You can use "Reopened" for example, but because this is no predefined default status we use "Started")