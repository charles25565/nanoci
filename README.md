# NanoCI

This is a small CI written in PHP, but can produce anything.

## Quickstart

Start off by making an environment variable AUTH_KEY.

Now, create a folder named `tasks/<TASKNAME>.task`.

Then, make a file in it called `TASK`, and executable.

This is a template:

```bash
#!/bin/bash
cd $(dirname ${BASH_SOURCE[0]})
rm -vfr artifacts
mkdir -p artifacts
```

Just place your stuff in `artifacts` when done.

Now, you can add a webhook which is `http://<SERVER_URL>/task.php?task=TASKNAME&authkey=CHANGEME`.

