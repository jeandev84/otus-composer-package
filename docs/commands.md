### Make git tag

```
$ git push origin HEAD
$ git tag -a v1.0.0 -m "Init version 1.0.0"
$ git push origin HEAD
$ git show v1.0.0
$ git tag (show all availables tags)
$ git push origin v1.0.0

============================================
$ git add .
$ git commit -m "Fix length calculation bug"
$ git tag -a v1.0.1 -m "Bugfix"
$ git push origin v1.0.1

```