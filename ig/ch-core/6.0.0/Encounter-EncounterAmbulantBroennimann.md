# Encounter Ambulant Broennimann - CH Core (R4) v6.0.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Encounter Ambulant Broennimann**

## Example Encounter: Encounter Ambulant Broennimann

Information Source: [https://www.bfh.ch/de/studium/bachelor/medizininformatik/](https://www.bfh.ch/de/studium/bachelor/medizininformatik/)

Profile: [CH Core Encounter](StructureDefinition-ch-core-encounter.md)

**identifier**: Visit number/1234

**status**: Finished

**class**: [ActCode: AMB](http://terminology.hl7.org/7.0.1/CodeSystem-v3-ActCode.html#v3-ActCode-AMB) (ambulatory)

**priority**: angemeldet, geplant

**subject**: [Elisabeth Brönnimann-Bertholet Female, DoB: 1937-05-03 ( urn:oid:2.16.756.5.30.1.123.100.1.1.1#80756015090002647590)](Patient-ElisabethBroennimannByBFH.md)

**period**: 2019-04-22 16:00:00+0200 --> 2019-04-22 16:15:00+0200

> **hospitalization****BFS Extension Medical Statistic: Admit Role for Encounter**:[BFS Medizinische Statistik - 19 1.2.V04 - Einweisende Instanz / Décision d’envoi / Istanza ricoverante: 1](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-bfs-medstats-19-admitrole.html#bfs-medstats-19-admitrole-1)(selbst, Angehörige)**BFS Extension Medical Statistic: Discharge Décision for Encounter**:[BFS Medizinische Statistik - 27 1.5.V02 - Entscheid für Austritt / Décision de sortie / Décisione dell’uscita: 1](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-bfs-medstats-27-dischargedecision.html#bfs-medstats-27-dischargedecision-1)(auf Initiative des Behandelnden)**BFS Extension Medical Statistic: Discharge Destination for Encounter**:[BFS Medizinische Statistik - 28 1.5.V03 - Aufenthalt nach Austritt / Séjour après la sortie / Destinazione dopo l’uscita: 1](http://fhir.ch/ig/ch-term/3.3.0/CodeSystem-bfs-medstats-28-dischargedestination.html#bfs-medstats-28-dischargedestination-1)(Zuhause)**admitSource**:Zuhause**dischargeDisposition**:geheilt/kein Behandlungsbedarf



## Resource Content

```json
{
  "resourceType" : "Encounter",
  "id" : "EncounterAmbulantBroennimann",
  "meta" : {
    "source" : "https://www.bfh.ch/de/studium/bachelor/medizininformatik/",
    "profile" : [
      "http://fhir.ch/ig/ch-core/StructureDefinition/ch-core-encounter"
    ]
  },
  "identifier" : [
    {
      "type" : {
        "coding" : [
          {
            "system" : "http://terminology.hl7.org/CodeSystem/v2-0203",
            "code" : "VN",
            "display" : "Visit number"
          }
        ]
      },
      "system" : "http://example.com/fallnummerdomain",
      "value" : "1234"
    }
  ],
  "status" : "finished",
  "class" : {
    "system" : "http://terminology.hl7.org/CodeSystem/v3-ActCode",
    "code" : "AMB",
    "display" : "ambulatory"
  },
  "priority" : {
    "coding" : [
      {
        "system" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-18-admittype",
        "code" : "2",
        "display" : "angemeldet, geplant"
      }
    ]
  },
  "subject" : {
    "reference" : "Patient/ElisabethBroennimannByBFH"
  },
  "period" : {
    "start" : "2019-04-22T16:00:00+02:00",
    "end" : "2019-04-22T16:15:00+02:00"
  },
  "hospitalization" : {
    "extension" : [
      {
        "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-bfs-ms-admitrole",
        "valueCoding" : {
          "system" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-19-admitrole",
          "code" : "1",
          "display" : "selbst, Angehörige"
        }
      },
      {
        "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-bfs-ms-dischargedecision",
        "valueCoding" : {
          "system" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-27-dischargedecision",
          "code" : "1",
          "display" : "auf Initiative des Behandelnden"
        }
      },
      {
        "url" : "http://fhir.ch/ig/ch-core/StructureDefinition/ch-ext-bfs-ms-dischargedestination",
        "valueCoding" : {
          "system" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-28-dischargedestination",
          "code" : "1",
          "display" : "Zuhause"
        }
      }
    ],
    "admitSource" : {
      "coding" : [
        {
          "system" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-17-admitsource",
          "code" : "1",
          "display" : "Zuhause"
        }
      ]
    },
    "dischargeDisposition" : {
      "coding" : [
        {
          "system" : "http://fhir.ch/ig/ch-core/CodeSystem/bfs-medstats-29-dischargeencounter",
          "code" : "1",
          "display" : "geheilt/kein Behandlungsbedarf"
        }
      ]
    }
  }
}

```
