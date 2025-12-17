# Anwendungsfälle - CH RAD-Order (R4) v2.0.1

* [**Table of Contents**](toc.md)
* **Anwendungsfälle**

## Anwendungsfälle

### Auftrag für bildgebende Diagnostik

Akteure:

* Auftrag erteilt durch: [Dr. O. Rderplacer](Practitioner-PractORderplacer.md), Hausärztin in der [Gemeinschaftspraxis "Happy Doctors"](Organization-OrgHappyDoctors.md).
* Empfänger des Auftrages: [Dr. O. Rderfiller](Practitioner-PractORderfiller.md), Radiologe an der [Radiologieabteilung "Happy Hospital"](Organization-OrgRadHappyHospital.md)
* Patientin: [Frau S. Ufferer](Patient-PatSUfferer.md), die eine radiologische Untersuchung benötigt

Die Patientin [Frau S. Ufferer](Patient-PatSUfferer.md) hat einen Termin bei [Dr. O. Rderplacer](Practitioner-PractORderplacer.md) in der [Gemeinschaftspraxis "Happy Doctors"](Organization-OrgHappyDoctors.md): [Dr. O. Rderplacer](Practitioner-PractORderplacer.md) vereinbart mit der Patientin, dass ein Thorax-Röntgen in der [Radiologieabteilung "Happy Hospital"](Organization-OrgRadHappyHospital.md) gemacht wird. [Dr. O. Rderplacer](Practitioner-PractORderplacer.md) schreibt einen Röntgenauftrag, der alle notwendigen Informationen enthält und schickt ihn an [Dr. O. Rderfiller](Practitioner-PractORderfiller.md). Zum Vergleich legt [Dr. O. Rderplacer](Practitioner-PractORderplacer.md) Bilder und Berichte vom früher bei. Außerdem bittet sie darum, der Patientin eine Kopie des Berichts zukommen zu lassen.

Zugehöriger [Questionnaire Response](QuestionnaireResponse-QuestionnaireResponseRadiologyOrderImagingRequest.md)

### Auftrag für eine radiologische Untersuchung mit Intervention

Akteure:

* Auftrag erteilt durch: [Dr. O. Rderplacer](Practitioner-PractORderplacer.md), Hausärztin in der [Gemeinschaftspraxis "Happy Doctors"](Organization-OrgHappyDoctors.md).
* Empfänger des Auftrages: [Dr. O. Rderfiller](Practitioner-PractORderfiller.md), Radiologe an der [Radiologieabteilung "Happy Hospital"](Organization-OrgRadHappyHospital.md)
* Patientin: [Frau S. Ufferer](Patient-PatSUfferer.md), die eine radiologische Intervention benötigt

Die Patientin [Frau S. Ufferer](Patient-PatSUfferer.md) hat nach ca.100 m Gehen Schmerzen im Bereich der Gesäss-, Oberschenkel- und Wadenmuskulatur, zudem sind ihre Zehen blau verfärbt. [Dr. O. Rderplacer](Practitioner-PractORderplacer.md) schlägt der Patientin eine Angiographie, gegebenenfalls mit anschliessender Ballondilatation (PTA) vor und meldet sie bei [Dr. O. Rderfiller](Practitioner-PractORderfiller.md) dafür an.

Zugehöriger [Questionnaire Response](QuestionnaireResponse-QuestionnaireResponseRadiologyOrderImagIntervent.md)

### Einholen einer Zweitmeinung

Akteure:

* Auftrag erteilt durch: [Dr. O. Rderplacer](Practitioner-PractORderplacer.md), Hausärztin in der [Gemeinschaftspraxis "Happy Doctors"](Organization-OrgHappyDoctors.md)
* Empfänger des Auftrages: [Prof. K. Nowit-All](Practitioner-PractKNowit-All.md), Chefarzt der [Radiologieabteilung "Happy Hospital"](Organization-OrgRadHappyHospital.md)
* Patientin: [Frau S. Ufferer](Patient-PatSUfferer.md), bei der nach einem Sturz die Schenkelhalsfraktur konservativ behandelt wird

Laut dem radiologischen Bericht scheint die Impressionsfraktur stabil zu sein. Deshalb und in Anbetracht des Alters des Patienten wurde auf einen chirurgischen Eingriff verzichtet. [Dr. O. Rderplacer](Practitioner-PractORderplacer.md) ist sich jedoch nicht sicher ob diese Entscheidung richtig war und schickt die Bilder und den Bericht für eine Zweitmeinung an [Prof. K. Nowit-All](Practitioner-PractKNowit-All.md).

Zugehöriger [Questionnaire Response](QuestionnaireResponse-QuestionnaireResponseRadiologyOrderSecondOpinion.md)

*Die oben beschriebene Zweitmeinung ist zu unterscheiden von der Echtzeit-Fernbefundung und Falldarstellung, wie sie von verschiedenen Teleradiologie-Lösungen angeboten wird. Letztere erfordern jedoch eine technische Infrastruktur die über das hinausgeht, was hier diskutiert wird.***

### Auftrag für externe Befundung

Akteure:

* Auftrag erteilt durch Assistenzärztin: [Med.pract. O. Rderplacer-Junior](Practitioner-PractORderplacerJunior.md) im [Spital "Small Hospital"](Organization-OrgSmallHospital.md).
* Empfänger des Auftrages: [Dr. O. Rderfiller](Practitioner-PractORderfiller.md), Radiologe an der [Radiologieabteilung "Happy Hospital"](Organization-OrgRadHappyHospital.md)
* Patientin: [Frau S. Ufferer](Patient-PatSUfferer.md), welche bei Ihrer Nichte zu Besuch ist. Sie hat plötzlich Fieber, Schüttelfrost und Husten.

[Med.pract. O. Rderplacer-Junior](Practitioner-PractORderplacerJunior.md) hat Notfalldienst. Sie veranlasst ein Thorax-Röntgen. Im [Spital "Small Hospital"](Organization-OrgSmallHospital.md) hat es zwar ein Röntgengerät; aber nur dienstags und donnerstags kommt ein Radiologe vorbei; an den anderen Wochentagen werden die Bilder durch die Radiologen des "Happy Hospital" befundet. [Med.pract. O. Rderplacer-Junior](Practitioner-PractORderplacerJunior.md) schickt deshalb die Bilder für die Befundung an [Dr. O. Rderfiller](Practitioner-PractORderfiller.md).

Zugehöriger [Questionnaire Response](QuestionnaireResponse-QuestionnaireResponseRadiologyOrderRemoteReporting.md)

*Die oben beschriebene externe Befundung ist zu unterscheiden von der Echtzeit-Fernbefundung und Falldarstellung, wie sie von verschiedenen Teleradiologie-Lösungen angeboten wird. Letztere erfordern jedoch eine technische Infrastruktur die über das hinausgeht, was hier diskutiert wird.***

### Anfrage für Ergebnissen von früher

Akteure:

* Auftrag erteilt durch Assistenzärztin: [Med.pract. O. Rderplacer-Junior](Practitioner-PractORderplacerJunior.md), im Spital [Spital "Small Hospital"](Organization-OrgSmallHospital.md).
* Empfänger des Auftrages: [Dr. O. Rderfiller](Practitioner-PractORderfiller.md), Radiologe an der [Radiologieabteilung "Happy Hospital"](Organization-OrgRadHappyHospital.md)
* Patientin: [Frau S. Ufferer](Patient-PatSUfferer.md), die vor einem Jahr eine radiologische Untersuchung (auf Anordnung ihres ehemaligen Hausarztes) hatte

[Med.pract. O. Rderplacer-Junior](Practitioner-PractORderplacerJunior.md) fragt die Patientin [Frau S. Ufferer](Patient-PatSUfferer.md), ob sie schon einmal eine Röntgenaufnahme der Brust hatte. Sie erzählt, dass sie vor einem Jahr in der [Radiologieabteilung "Happy Hospital"](Organization-OrgRadHappyHospital.md) geröntgt wurde. [Med.pract. O. Rderplacer-Junior](Practitioner-PractORderplacerJunior.md) schreibt eine Anfrage für die Ergebnisse dieser Untersuchung und schickt sie an [Dr. O. Rderfiller](Practitioner-PractORderfiller.md), Radiologe an der [Radiologieabteilung "Happy Hospital"](Organization-OrgRadHappyHospital.md). Außerdem bittet sie darum, der Patientin eine Kopie des Berichts zukommen zu lassen.

Zugehöriger [Questionnaire Response](QuestionnaireResponse-QuestionnaireResponseRadiologyOrderRequestPrevious.md)

