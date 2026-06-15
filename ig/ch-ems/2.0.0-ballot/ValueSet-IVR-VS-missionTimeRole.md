# IVR Mission Time Role - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IVR Mission Time Role**

## ValueSet: IVR Mission Time Role 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-missionTimeRole | *Version*:2.0.0-ballot |
| Draft as of 2026-06-15 | *Computable Name*:IVRVSmissionTimeRole |
| **Copyright/Legal**: CC0-1.0 | |

 
List of defined status times. 

 **References** 

* [CH EMS Observation: Mission Time Status](StructureDefinition-ch-ems-observation-missiontimestatus.md)
* [EMS Protocol](StructureDefinition-logicalmodel-ems-protocol.md)

### Logical Definition (CLD)

 

### Expansion

-------

 Explanation of the columns that may appear on this page: 

| | |
| :--- | :--- |
| Level | A few code lists that FHIR defines are hierarchical - each code is assigned a level. In this scheme, some codes are under other codes, and imply that the code they are under also applies |
| System | The source of the definition of the code (when the value set draws in codes defined elsewhere) |
| Code | The code (used as the code in the resource instance) |
| Display | The display (used in the*display*element of a[Coding](http://hl7.org/fhir/R4/datatypes.html#Coding)). If there is no display, implementers should not simply display the code, but map the concept into their application |
| Definition | An explanation of the meaning of the concept |
| Comments | Additional notes about how to use the code |



## Resource Content

```json
{
  "resourceType" : "ValueSet",
  "id" : "IVR-VS-missionTimeRole",
  "url" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-missionTimeRole",
  "version" : "2.0.0-ballot",
  "name" : "IVRVSmissionTimeRole",
  "title" : "IVR Mission Time Role",
  "status" : "draft",
  "experimental" : false,
  "date" : "2026-06-15T08:00:21+00:00",
  "publisher" : "HL7 Switzerland",
  "contact" : [{
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/"
    }]
  },
  {
    "name" : "HL7 Switzerland",
    "telecom" : [{
      "system" : "url",
      "value" : "https://www.hl7.ch/",
      "use" : "work"
    }]
  }],
  "description" : "List of defined status times.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "immutable" : false,
  "copyright" : "CC0-1.0",
  "compose" : {
    "include" : [{
      "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
      "concept" : [{
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/valueset-concept-comments",
          "valueString" : "Zeitpunkt des Eingangs des Notrufs bei der Sanitätsnotrufzentrale Einsatzleitsystem der Sanitätsnotrufzentrale definiert Zeit des Alarmeingangs wird (falls Schnittstelle zum Einsatzleitsystem vorhanden) technisch vom Einsatzleitsystem der Sanitätsnotrufzentrale geliefertFalls keine Schnittstelle zum Einsatzleitsystem vorhanden ist muss der Rettungsdienst die Zeitangabe der Sanitätsnotrufzentrale zwingend übernehmen"
        }],
        "code" : "1000033",
        "display" : "alarm",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Alarmierungszeit"
        },
        {
          "language" : "fr-CH",
          "value" : "Heure d'alarme"
        },
        {
          "language" : "it-CH",
          "value" : "Orario dell'allarme"
        }]
      },
      {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/valueset-concept-comments",
          "valueString" : "Zeitpunkt, zu dem der Rettungsdienst von der Sanitätsnotrufzentrale alarmiert wurde Einsatzleitsystem der Sanitätsnotrufzentrale definiert Alarmierungszeit wird (falls Schnittstelle zum Einsatzleitsystem vorhanden) technisch vom Einsatzleitsystem der Sanitätsnotrufzentrale geliefertFalls keine Schnittstelle zum Einsatzleitsystem vorhanden ist muss der Rettungsdienst die Zeitangabe der Sanitätsnotrufzentrale zwingend übernehmen"
        }],
        "code" : "1000034",
        "display" : "disposition",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Dispositionszeit"
        },
        {
          "language" : "fr-CH",
          "value" : "traitement de la centrale d’appels"
        },
        {
          "language" : "it-CH",
          "value" : "Tempo di elaborazione telefonata 144"
        }]
      },
      {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/valueset-concept-comments",
          "valueString" : "Zeitpunkt des Ausrückens der ersten Einheit des Rettungsdienstes ausrückende Einheit erfasst die Zeit der Abfahrt wird (falls Schnittstelle zum Einsatzleitsystem vorhanden) technisch vom Einsatzleitsystem der Sanitätsnotrufzentrale geliefert, kann aber vom Rettungsdienst verändert werden"
        }],
        "code" : "1000035",
        "display" : "rollout",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Ausrückzeit"
        },
        {
          "language" : "fr-CH",
          "value" : "Parti"
        },
        {
          "language" : "it-CH",
          "value" : "Partenza per il luogo"
        }]
      },
      {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/valueset-concept-comments",
          "valueString" : "Zeit des Eintreffens des Rettungsdienstes am Einsatzort gemäss Aufgebot Sanitätsnotrufzentrale ausrückende Einheit erfasst die Zeit der Abfahrt wird (falls Schnittstelle zum Einsatzleitsystem vorhanden) technisch vom Einsatzleitsystem der Sanitätsnotrufzentrale geliefert, kann aber vom Rettungsdienst verändert werden"
        }],
        "code" : "1000036",
        "display" : "arrival on scene",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Ankunftszeit am Einsatzort"
        },
        {
          "language" : "fr-CH",
          "value" : "Arrivée sur le site"
        },
        {
          "language" : "it-CH",
          "value" : "Arrivo sul luogo"
        }]
      },
      {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/valueset-concept-comments",
          "valueString" : "wird zur Zeit NICHT verwendet\nZeitpunkt des Eintreffens des Rettungsdienstes beim Patienten ausrückende Einheit erfasst die Zeit der Abfahrt wird (falls Schnittstelle zum Einsatzleitsystem vorhanden) technisch vom Einsatzleitsystem der Sanitätsnotrufzentrale geliefert, kann aber vom Rettungsdienst verändert werden"
        }],
        "code" : "1000037",
        "display" : "arrival patient",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Ankunftszeit beim Patienten"
        },
        {
          "language" : "fr-CH",
          "value" : "Arrivée auprès du patient"
        },
        {
          "language" : "it-CH",
          "value" : "Accesso al paziente"
        }]
      },
      {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/valueset-concept-comments",
          "valueString" : "Zeit der Abfahrt vom Ereignisort ausrückende Einheit erfasst die Zeit der Abfahrt wird (falls Schnittstelle zum Einsatzleitsystem vorhanden) technisch vom Einsatzleitsystem der Sanitätsnotrufzentrale geliefert, kann aber vom Rettungsdienst verändert werden"
        }],
        "code" : "1000038",
        "display" : "departure from scene",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Abfahrtszeit vom Einsatzort"
        },
        {
          "language" : "fr-CH",
          "value" : "Départ du site"
        },
        {
          "language" : "it-CH",
          "value" : "Partenza dal luogo"
        }]
      },
      {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/valueset-concept-comments",
          "valueString" : "Zeit der Ankunft am Zielort gemäss Einsatzauftrag oder EntscheidPatient/Notarzt/Rettungsdienst ausrückende Einheit erfasst die Zeit der Ankunft wird (falls Schnittstelle zum Einsatzleitsystem vorhanden) technisch vom Einsatzleitsystem der Sanitätsnotrufzentrale geliefert, kann aber vom Rettungsdienst verändert werden"
        }],
        "code" : "1000039",
        "display" : "arrival at target",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Ankunftszeit am Zielort"
        },
        {
          "language" : "fr-CH",
          "value" : "Arrivée à destination"
        },
        {
          "language" : "it-CH",
          "value" : "Arrivo a destinazione"
        }]
      },
      {
        "code" : "1000040",
        "display" : "handover patient",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Übergabezeit"
        },
        {
          "language" : "fr-CH",
          "value" : "Remise du patient"
        },
        {
          "language" : "it-CH",
          "value" : "Consegna del paziente"
        }]
      },
      {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/valueset-concept-comments",
          "valueString" : "Zeit der Abfahrt des Rettungsdienstes ab Zielort. In der Regel ist dann ein neuer Einsatz bereits wieder möglich ausrückende Einheit erfasst die Zeit der Abfahrt wird (falls Schnittstelle zum Einsatzleitsystem vorhanden) technisch vom Einsatzleitsystem der Sanitätsnotrufzentrale geliefert, kann aber vom Rettungsdienst verändert werden"
        }],
        "code" : "1000041",
        "display" : "departure from target",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Abfahrtszeit vom Zielort"
        },
        {
          "language" : "fr-CH",
          "value" : "Départ du lieu de destination"
        },
        {
          "language" : "it-CH",
          "value" : "Partenza dal luogo di destinazione"
        }]
      },
      {
        "extension" : [{
          "url" : "http://hl7.org/fhir/StructureDefinition/valueset-concept-comments",
          "valueString" : "Zeitpunkt, in dem das Team des Rettungsdienstes wieder voll einsatzbereit ist ausrückende Einheit erfasst die Zeit der vollen Einsatzbereitschaft wird (falls Schnittstelle zum Einsatzleitsystem vorhanden) technisch vom Einsatzleitsystem der Sanitätsnotrufzentrale geliefert, kann aber vom Rettungsdienst verändert werden"
        }],
        "code" : "1000042",
        "display" : "operational readiness",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Zeit Einsatzbereit"
        },
        {
          "language" : "fr-CH",
          "value" : "Opérationnel"
        },
        {
          "language" : "it-CH",
          "value" : "Prontezza"
        }]
      },
      {
        "code" : "1000171",
        "display" : "arrival time emergency doctor",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Ankunftszeit Notarzt/Notärztin"
        },
        {
          "language" : "fr-CH",
          "value" : "Heure d'arrivée médecin d'urgence"
        },
        {
          "language" : "it-CH",
          "value" : "Orario di arrivo medico d'urgenza"
        }]
      },
      {
        "code" : "1000172",
        "display" : "pick-up time emergency doctor",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Abholzeit Notarzt/Notärztin"
        },
        {
          "language" : "fr-CH",
          "value" : "Heure de prise en charge médecin d'urgence"
        },
        {
          "language" : "it-CH",
          "value" : "Orario di prelievo medico d'urgenza"
        }]
      }]
    }]
  }
}

```
