from time import sleep
import sys
s = raw_input("Enter a recursive acronym: ")
for x in range(20000):
    y = x**2
sleep(3)
sys.stderr.write("\nnot enough memory to perform this operation")
raw_input("")
sys.exit(1)
