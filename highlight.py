import sys
import re

softConsonants = re.sub(ur"([БбВвГгДдЗзКкЛлМмНнПпРрСсТтФфХх])(?=[ЯяЕеИиЁёЮюЬь])", ur"<span class= 'soft'>\1</span>", f)
exceptionsAlwaysHard = re.sub(ur"(?<=[ШшЦцЖж])(ЯяЕеИиЁёЮю)", ur"<span class= 'alwaysHard'>\1</span>", softConsonants)
exceptionsAlwaysSoft = re.sub(ur"(?<=[ЩщЧч])(АаЭэЫыОоУу)", ur"<span class= 'alwaysSoft'>\1</span>", exceptionsAlwaysHard)


print(sys.argv[1])
