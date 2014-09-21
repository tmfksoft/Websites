import time
s = time.strftime('Current time: %I:%M:%S %p, %B %d, %Y (%Z)', time.localtime())
print(s)
raw_input()