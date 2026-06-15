# IVR Symptom - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IVR Symptom**

## ValueSet: IVR Symptom 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-symptom | *Version*:2.0.0-ballot |
| Draft as of 2026-06-15 | *Computable Name*:IVRVSsymptom |
| **Copyright/Legal**: CC0-1.0 | |

 
List of symptoms of a patient. 

 **References** 

* [CH EMS Observation: Anamnesis Symptom](StructureDefinition-ch-ems-observation-anamnesissymptom.md)
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
  "id" : "IVR-VS-symptom",
  "url" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-symptom",
  "version" : "2.0.0-ballot",
  "name" : "IVRVSsymptom",
  "title" : "IVR Symptom",
  "status" : "draft",
  "experimental" : false,
  "date" : "2026-06-15T08:07:03+00:00",
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
  "description" : "List of symptoms of a patient.",
  "jurisdiction" : [{
    "coding" : [{
      "system" : "urn:iso:std:iso:3166",
      "code" : "CH"
    }]
  }],
  "copyright" : "CC0-1.0",
  "compose" : {
    "include" : [{
      "system" : "http://snomed.info/sct",
      "concept" : [{
        "code" : "24199005",
        "display" : "Agitation",
        "designation" : [{
          "language" : "de-CH",
          "value" : "krankhafte Unruhe"
        },
        {
          "language" : "fr-CH",
          "value" : "Agitation"
        },
        {
          "language" : "it-CH",
          "value" : "Agitazione"
        }]
      },
      {
        "code" : "267036007",
        "display" : "Dyspnea",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Atemnot"
        },
        {
          "language" : "fr-CH",
          "value" : "Dyspnée"
        },
        {
          "language" : "it-CH",
          "value" : "Dispnea"
        }]
      },
      {
        "code" : "418107008",
        "display" : "Unconsciousness",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Bewusstseinsstörung"
        },
        {
          "language" : "fr-CH",
          "value" : "Inconscience"
        },
        {
          "language" : "it-CH",
          "value" : "Incoscienza"
        }]
      },
      {
        "code" : "131148009",
        "display" : "Bleeding",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Blutung"
        },
        {
          "language" : "fr-CH",
          "value" : "Hemorragie"
        },
        {
          "language" : "it-CH",
          "value" : "Emorragia"
        }]
      },
      {
        "code" : "62315008",
        "display" : "Diarrhea",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Durchfall"
        },
        {
          "language" : "fr-CH",
          "value" : "Diarrhée"
        },
        {
          "language" : "it-CH",
          "value" : "Diarrea"
        }]
      },
      {
        "code" : "422400008",
        "display" : "Vomiting",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Erbrechen"
        },
        {
          "language" : "fr-CH",
          "value" : "Vomissement"
        },
        {
          "language" : "it-CH",
          "value" : "Vomito"
        }]
      },
      {
        "code" : "386661006",
        "display" : "Fever",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Fieber"
        },
        {
          "language" : "fr-CH",
          "value" : "Fièvre"
        },
        {
          "language" : "it-CH",
          "value" : "Febbre"
        }]
      },
      {
        "code" : "3424008",
        "display" : "Tachycardia",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Tachykardie"
        },
        {
          "language" : "fr-CH",
          "value" : "Tachycardie"
        },
        {
          "language" : "fr-CH",
          "value" : "Tachicardia"
        }]
      },
      {
        "code" : "418363000",
        "display" : "Pruritus",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Juckreiz"
        },
        {
          "language" : "fr-CH",
          "value" : "Prurit"
        },
        {
          "language" : "it-CH",
          "value" : "Prurito"
        }]
      },
      {
        "code" : "91175000",
        "display" : "Seizure",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Krampfanfall"
        },
        {
          "language" : "fr-CH",
          "value" : "Convulsions"
        },
        {
          "language" : "it-CH",
          "value" : "Convulsioni"
        }]
      },
      {
        "code" : "44695005",
        "display" : "Paralysis",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Lähmung"
        },
        {
          "language" : "fr-CH",
          "value" : "Paralysie"
        },
        {
          "language" : "it-CH",
          "value" : "Paralisi"
        }]
      },
      {
        "code" : "80313002",
        "display" : "Palpitations",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Palpitation"
        },
        {
          "language" : "fr-CH",
          "value" : "Palpitations"
        },
        {
          "language" : "it-CH",
          "value" : "Palpitazioni"
        }]
      },
      {
        "code" : "21522001",
        "display" : "Abdominal pain",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Bauchschmerzen"
        },
        {
          "language" : "fr-CH",
          "value" : "Douleur abdominale"
        },
        {
          "language" : "it-CH",
          "value" : "Dolore addominale"
        }]
      },
      {
        "code" : "29857009",
        "display" : "Chest pain",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Brustschmerzen"
        },
        {
          "language" : "fr-CH",
          "value" : "Douleur thoracique"
        },
        {
          "language" : "it-CH",
          "value" : "Dolore toracico"
        }]
      },
      {
        "code" : "162397003",
        "display" : "Pain in throat",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Halsschmerzen"
        },
        {
          "language" : "fr-CH",
          "value" : "Mal de gorge"
        },
        {
          "language" : "it-CH",
          "value" : "Mal di gola"
        }]
      },
      {
        "code" : "25064002",
        "display" : "Headache",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Kopfschmerzen"
        },
        {
          "language" : "fr-CH",
          "value" : "Céphalée"
        },
        {
          "language" : "it-CH",
          "value" : "Cefalea"
        }]
      },
      {
        "code" : "301354004",
        "display" : "Pain of ear",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Ohrenschmerzen"
        },
        {
          "language" : "fr-CH",
          "value" : "Otalgie"
        },
        {
          "language" : "it-CH",
          "value" : "Otalgia"
        }]
      },
      {
        "code" : "161891005",
        "display" : "Backache",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Rückenschmerzen"
        },
        {
          "language" : "fr-CH",
          "value" : "Dorsaglie"
        },
        {
          "language" : "it-CH",
          "value" : "Dorsalgia"
        }]
      },
      {
        "code" : "27355003",
        "display" : "Toothache",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Zahnschmerzen"
        },
        {
          "language" : "fr-CH",
          "value" : "Mal de dent"
        },
        {
          "language" : "it-CH",
          "value" : "Mal di denti"
        }]
      },
      {
        "code" : "399153001",
        "display" : "Vertigo",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Schwindel"
        },
        {
          "language" : "fr-CH",
          "value" : "Vertiges"
        },
        {
          "language" : "it-CH",
          "value" : "Vertigini"
        }]
      },
      {
        "code" : "271594007",
        "display" : "Syncope",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Synkope"
        },
        {
          "language" : "fr-CH",
          "value" : "Syncope"
        },
        {
          "language" : "it-CH",
          "value" : "Sincope"
        }]
      },
      {
        "code" : "247412007",
        "display" : "Childbirth pain",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Wehen"
        },
        {
          "language" : "fr-CH",
          "value" : "Contractions"
        },
        {
          "language" : "it-CH",
          "value" : "Contrazioni"
        }]
      },
      {
        "code" : "422587007",
        "display" : "Nausea",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Übelkeit"
        },
        {
          "language" : "fr-CH",
          "value" : "Nausée"
        },
        {
          "language" : "it-CH",
          "value" : "Nausea"
        }]
      },
      {
        "code" : "22253000",
        "display" : "Pain",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Schmerzen"
        },
        {
          "language" : "fr-CH",
          "value" : "Douleur"
        },
        {
          "language" : "it-CH",
          "value" : "Dolore"
        }]
      }]
    },
    {
      "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
      "concept" : [{
        "code" : "1000055",
        "display" : "not asked",
        "designation" : [{
          "language" : "de-CH",
          "value" : "nicht erfragt"
        },
        {
          "language" : "fr-CH",
          "value" : "Pas demandé"
        },
        {
          "language" : "it-CH",
          "value" : "Non indagato"
        }]
      },
      {
        "code" : "1000058",
        "display" : "no information",
        "designation" : [{
          "language" : "de-CH",
          "value" : "keine Angaben"
        },
        {
          "language" : "fr-CH",
          "value" : "Aucune information"
        },
        {
          "language" : "it-CH",
          "value" : "Nessuna informazione"
        }]
      },
      {
        "code" : "1000057",
        "display" : "see attachment",
        "designation" : [{
          "language" : "de-CH",
          "value" : "siehe Beilage"
        },
        {
          "language" : "fr-CH",
          "value" : "Voir pièce jointe"
        },
        {
          "language" : "it-CH",
          "value" : "Vedi allegato"
        }]
      }]
    }]
  }
}

```
