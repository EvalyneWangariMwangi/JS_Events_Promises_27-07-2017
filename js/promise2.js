var fso, ts,s;
fso = new ActiveXObject("Scripting.FileSystemObject");
f1 = fso.OpenTextFile("promise.txt", 1);
s = ts.ReadLine();
document.write(s);
document.write("i like this");