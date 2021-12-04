const app = require("express")();
const http = require("http").Server(app);

app.listen(3000, () => {
  console.log("listening on 3000");
});
// Since this is an Async function we can add any function anywhere
// in the code.
app.get("/", (req, res) => {
  // we will get a post request
  let data = req.body;
  console.log(data);
  res.send("Hello World");
});
