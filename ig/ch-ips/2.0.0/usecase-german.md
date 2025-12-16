# Anwendungsfälle - CH IPS (R4) v2.0.0

* [**Table of Contents**](toc.md)
* **Anwendungsfälle**

## Anwendungsfälle

Die nachfolgenden Anwendungsfälle dienen der Illustration möglicher Szenarien für den Einsatz des International Patient Summary Dokuments. Die Fälle sollen exemplarisch die Repräsentation des Dokuments darstellen.

### Fallbeispiel 1

Frau [Monika Wegmüller](Patient-MonikaWegmueller.md), geboren am 15. Mai 1943, kommt am 26. April 2024 mit plötzlich aufgetretenem Unwohlsein, Schwindel und Atembeschwerden in die Notaufnahme. Dort wird sie von einem Team aus ärztlichem Fachpersonal und Pflegepersonal betreut. Die verantwortliche Ärztin im Spital, Dr. Martina Meier, ruft das [**aktuellste IPS Dokument (11. Januar 2024)**](Bundle-UC1-SwissIpsDocument1.md) von Frau Wegmüller ab, welches der [Hausarzt](PractitionerRole-FamilienHausarztAtHausarzt.md) am 11. Januar 2024 erstellt hat. Frau Dr. Meier sieht darin dokumentiert, dass Frau Wegmüller an [Diabetes](Condition-DiabetesMellitus.md) und [Bluthochdruck](Condition-HighBloodPressure.md) leidet und deswegen [Metformin](MedicationStatement-MedStatMetformin.md) und [Candesartan](MedicationStatement-MedStatCandesartan.md) einnimmt, ausserdem ist eine [koronare Herzkrankheit](Condition-CoronaryHeartDisease.md) bekannt, weswegen Frau Wegmüller vor 2 Jahren einen [Stent](Procedure-StentPlacement.md) erhalten hat. Allergien und Intoleranzen von Frau Wegmüller wurden durch ihren Hausarzt bisher noch nicht erfragt.

Aufgrund dieser Vorinformationen vermutet Dr. Meier als Grund für das Unwohlsein und die Atembeschwerden einen [Herzinfarkt](Condition-12d8debe-5e03-465d-83f3-17675be9db4a.md), der sich dann auch im EKG und den Laboruntersuchungen bestätigt. Frau Wegmüller wird ins Herzkatheterlabor gebracht, wo sich zeigt, dass ein Herzkranzgefäss beinahe verschlossen ist und sie einen weiteren [Stent](Procedure-d646c888-7af0-4439-8aae-9fd490054583.md) braucht. Weil Frau Dr. Meier so gut informiert war konnte sie schnell richtig handeln und so geht es Frau Wegmüller schnell besser. Zur Überwachung wird sie auf die kardiologische Überwachungsstation (Kardio-IMC) aufgenommen. 
 Dort wird sie weiterhin von [Dr. Meier](PractitionerRole-869a4dd9-3a4a-4838-ad1e-42453d341147.md) betreut und am Ende des Spitalaufenthalts wird ein [**neues IPS Dokument (3. Mai 2024)**](Bundle-UC1-SwissIpsDocument2.md) mit den aktuellsten und ergänzten Informationen für Fr. Wegmüller erstellt.

