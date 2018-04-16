## Breeyn McCarney's 2018 website redo.

https://www.breeyn.com

details coming soon


### SCSS
The postcss-assets plugin allows you to refer to image assets using code such as:

```
.widget1 {
  width: width('myimage.jpg');
  height: height('myimage.jpg');
  background-image: resolve('myimage.jpg');
}
```

You can also inline images with automatic Base64 encoding:

```
.widget2 {
  background-image: inline('myimage.jpg');
}
```
