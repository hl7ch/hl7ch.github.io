# Anwendungsfälle - CH EPREG (R4) v1.0.0

* [**Table of Contents**](toc.md)
* **Anwendungsfälle**

## Anwendungsfälle

Der **Einsatz des Schwangerschaftspasses** hängt von der Arbeitsweise der behandelnden Leistungserbringenden ab. Mögliche Beispiele für den Einsatz dieses Austauschformats sind im [Konzept](https://www.e-health-suisse.ch/upload/documents/eSchwangerschaftspass_Konzept_de.pdf) detailliert beschrieben, darunter:

* Vorsorge ([Fallbeispiel 3: Zwillingsschwangerschaft](#fallbeispiel-3-zwillingsschwangerschaft))
* Überweisung ([Fallbeispiel 1: Präeklampsie](#fallbeispiel-1-präeklampsie))
* Geburt und Nachsorge
* Notfall ([Fallbeispiel 2: Starke Wehentätigkeit](#fallbeispiel-2-starke-wehentätigkeit))
* Nachfolgende Schwangerschaft

Die nachfolgenden **Anwendungsfälle** dienen der Illustration möglicher Szenarien im Rahmen der oben genannten Einsatzmöglichkeiten des Schwangerschaftspasses.

### Fallbeispiel 1: Präeklampsie

 Die Patientin [Katrin Kinderlieb](Patient-UC1-KatrinKinderlieb.md) (geb. 18.01.1986) ist mit ihrem ersten Kind schwanger. Bei der [Routineuntersuchung vom 05.02.2025](Encounter-UC1-EncounterMother20250205.md) in der [37. Schwangerschaftswoche](Observation-UC1-GestationalAgeInDays-20250205.md) stellt die Gynäkologin, Frau [Petra Sectionata,](PractitionerRole-UC1-PetraSectionataAtFrauenzimmer.md) einen massiv erhöhten Blutdruck ([160/100 mmHg](Observation-UC1-BloodPressure-20250205.md)) fest. Auf die Frage, ob Frau Kinderlieb noch weitere Beschwerden habe, berichtet sie von Kopfschmerzen und Schwindel sowie einem gelegentlichen Druckgefühl im Oberbauch.
 Nach Durchsicht des Schwangerschaftsdiabetestagebuchs sowie der Werte der letzten Urinproben mit stetig gestiegenen Harnsäurewerten (> 6 mg/dl), fordert Frau Sectionata weitere Laboruntersuchungen an. Aufgrund der auffälligen Werte sendet Frau Sectionata die Patientin ins Spital 'Kids & Mütter' und trägt die neuen Laborwerte in den Schwangerschaftspass ein. 

 Dank dem [**Schwangerschaftspass**](Bundle-UC1-Document.md) mit den aktuellsten Angaben zu den Nierenwerten ([Kreatinin: 1.2 mg/dl](Observation-UC1-Creatinine-20250205.md), [Harnsäure: 6.3 mg/dL](Observation-UC1-Urate-20250205.md), [GFR: 54 ml/min](Observation-UC1-GFR-20250205.md)), den Leberwerten ([GGT: 43 U/l](Observation-UC1-GGT-20250205.md), [GOT/AST/ASAT: 43 U/l](Observation-UC1-AST-20250205.md), [ALAT: 98 U/l](Observation-UC1-ALAT-20250205.md), [AP: 109 U/l](Observation-UC1-AP-20250205.md)), dem Blutzuckerwert ([Glukose: 8.1 mmol/l](Observation-UC1-GlucoseLab-20250205.md)) und dem Blutdruckwert können die Ärztinnen und Ärzte genau einschätzen, wie gravierend die Präeklampsie ist. Mit den Informationen zur aktuellen Kindslage ([Schädellage](Observation-UC1-FetalPosition-20250205.md)), der Anzahl der Blutplättchen ([Thrombozyten: 130](Observation-UC1-Platelets-20250205.md)) und dem Hämatokrit ([Hkt: 46 %](Observation-UC1-Hematocrit-20250205.md)) kann bei einer Geburtseinleitung frühzeitig entschieden werden, ob eine Sectio Caesarea erforderlich ist. 

Fig.: Schwangerschaftspass Katrin Kinderlieb, 05.02.2025

### Fallbeispiel 2: Starke Wehentätigkeit

 Die Patientin [Fabienne Babyglück](Patient-76c2c5aa-3d7f-438d-b23d-56ce827695fd.md) (geb. 10.05.1999) wird in der [32. Schwangerschaftswoche](Observation-84869994-4348-4ad3-95ee-d9b0faf75dba.md) mit starken Wehen und in einem halb bewusstlosen Zustand in die Geburtsklinik 'Willkommen auf der Welt' eingeliefert. Die Gynäkologin [Tanja Allesgut](PractitionerRole-89029102-999c-4b69-a836-e4dbfbd55527.md) und die Hebamme [Ruth Ohazwei](PractitionerRole-e1b736e3-10bb-41aa-8d17-c7ba28895880.md) nehmen die Patientin in Empfang. Im Schwangerschaftspass finden sie die dokumentierte [Steisslage des Kindes](Observation-4a907770-6665-4fb4-b186-afd0ddf48742.md) sowie den Hinweis auf einen insulinpflichtigen Gestationsdiabetes mit einem [kapillären Blutzuckerwert von 4.7 mmol/l](Observation-bbd6f1bc-1d87-4c90-a313-98bea06c3dfb.md) bei der gestrigen [Vorsorgeuntersuchung vom 26.03.2025](Encounter-8e89c502-964f-4234-9728-540d881b0380.md). 

 Am heutigen Aufnahmetag, bei der [Eintrittsuntersuchung vom 27.03.2025](Encounter-1ba6df42-ae1a-4b4a-886f-33d6b2223b1f.md), wird ein erniedrigter [kapillärer Blutzuckerwert von 3.9 mmol/l](Observation-4b9ca365-383e-41c8-9bac-b3c79aea1c7e.md) gemessen; dieser wird im Labor durch eine [venöse Messung](Observation-b9145a94-ea12-479b-a031-b07d4ac9f297.md) bestätigt. Aufgrund der begleitenden Symptome und des raschen Geburtsfortschritts ([Muttermund 5 cm](Observation-c9bba019-9ed9-4574-84e2-f7d302e8f5d0.md), [schwache Kindsbewegungen](Observation-3e120206-7aa2-4ced-82c3-3704868e023f.md), [fetale Herztöne bei 110 /min](Observation-d0b53779-fde0-4780-9ff4-9ba2a4cf9393.md)) wird der Patientin umgehend Glukose verabreicht und eine Notfallsectio vorbereitet. Im weiteren Verlauf werden die erfassten Werte im [**Schwangerschaftspass**](Bundle-UC2-Document.md) nachgetragen. 

Fig.: Schwangerschaftspass Fabienne Babyglück, 27.03.2025

### Fallbeispiel 3: Zwillingsschwangerschaft

 Die Patientin [Sophie Doppelherz](Patient-UC3-SophieDoppelherz.md) (geb. 22.07.1992) erwartet ihre ersten beiden Kinder – eine Zwillingsschwangerschaft. Bei der ersten [Vorsorgeuntersuchung vom 10.02.2025](Encounter-UC3-EncounterMother20250210.md) in der [7. Schwangerschaftswoche](Observation-UC3-GestationalAgeInDays-20250210.md) stellt die Gynäkologin [Claudia Frühblick](PractitionerRole-UC3-ClaudiaFruehblickAtFrauenzimmer.md) stabile Kreislaufwerte und einen unauffälligen Allgemeinzustand fest. 

 Frau Doppelherz berichtet, dass sie sich wohlfühlt und keine Beschwerden hat. Der [Blutdruck liegt bei 120/75 mmHg](Observation-UC3-BloodPressure-20250210.md), der [Urinstatus ist unauffällig](Observation-UC3-UrineFinding-20250210.md) (kein Eiweiss, kein Zucker, keine Nitrite), das [Gewicht beträgt 64 kg](Observation-UC3-BodyWeight-20250210.md). Im Ultraschall zeigt sich eine Zwillingsschwangerschaft mit zwei altersentsprechend entwickelten Feten ([Kind A](Patient-UC3-ChildA.md), [Kind B](Patient-UC3-ChildB.md)) in unauffälliger Fruchtwassermenge. Beide Herzaktivitäten liegen bei rund 155 Schlägen pro Minute ([Kind A](Observation-UC3-FetalHeartFeatureChildA-20250210.md), [Kind B](Observation-UC3-FetalHeartFeatureChildB-20250210.md)). All diese Werte werden im [**Schwangerschaftspass**](Bundle-UC3-Document.md) dokumentiert. Da alle Befunde unauffällig sind, empfiehlt Dr. Frühblick die [nächste Routineuntersuchung in vier Wochen](Appointment-UC3-Appointment20250310.md). 

Fig.: Schwangerschaftspass Sophie Doppelherz, 10.02.2025

