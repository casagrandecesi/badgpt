import sys

with open(sys.argv[1]) as f:
    t = f.read()
    
print(t.replace("\n", r"\n"))
