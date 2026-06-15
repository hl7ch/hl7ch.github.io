# IVR Location Type - CH EMS (R4) v2.0.0-ballot

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **IVR Location Type**

## ValueSet: IVR Location Type 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-locationType | *Version*:2.0.0-ballot |
| Draft as of 2026-06-15 | *Computable Name*:IVRVSlocationType |
| **Copyright/Legal**: CC0-1.0 | |

 
List of types of event locations. 

 **References** 

* [CH EMS Location: Location and Destination](StructureDefinition-ch-ems-location-locationdestination.md)
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
  "id" : "IVR-VS-locationType",
  "url" : "http://fhir.ch/ig/ch-ems/ValueSet/IVR-VS-locationType",
  "version" : "2.0.0-ballot",
  "name" : "IVRVSlocationType",
  "title" : "IVR Location Type",
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
  "description" : "List of types of event locations.",
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
        "code" : "257564005",
        "display" : "Apartment",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Wohnung"
        },
        {
          "language" : "fr-CH",
          "value" : "Apartement"
        },
        {
          "language" : "it-CH",
          "value" : "Appartamento"
        }]
      },
      {
        "code" : "257688003",
        "display" : "Residential home",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Altersheim"
        },
        {
          "language" : "fr-CH",
          "value" : "Maison de retraite"
        },
        {
          "language" : "it-CH",
          "value" : "Casa anziani"
        }]
      },
      {
        "code" : "285141008",
        "display" : "Work environment",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Industrie / Arbeitsplatz"
        },
        {
          "language" : "fr-CH",
          "value" : "Industrie / Lieu de travail"
        },
        {
          "language" : "it-CH",
          "value" : "Industria / Luogo di lavoro"
        }]
      },
      {
        "code" : "257704009",
        "display" : "Sports ground",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Sport / Freizeit"
        },
        {
          "language" : "fr-CH",
          "value" : "Sport et loisirs"
        },
        {
          "language" : "it-CH",
          "value" : "Sport e Svago"
        }]
      },
      {
        "code" : "257710009",
        "display" : "Street",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Strasse / öffentlicher Raum"
        },
        {
          "language" : "fr-CH",
          "value" : "Voie publique"
        },
        {
          "language" : "it-CH",
          "value" : "Luogo pubblico"
        }]
      },
      {
        "code" : "257674002",
        "display" : "Public building",
        "designation" : [{
          "language" : "de-CH",
          "value" : "öffentliches Gebäude"
        },
        {
          "language" : "fr-CH",
          "value" : "Lieu public"
        },
        {
          "language" : "it-CH",
          "value" : "Luogo pubblico"
        }]
      },
      {
        "code" : "257603009",
        "display" : "Educational establishment",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Bildungseinrichtung"
        },
        {
          "language" : "fr-CH",
          "value" : "Lieu de formation"
        },
        {
          "language" : "it-CH",
          "value" : "Luogo di formazione"
        }]
      },
      {
        "code" : "83891005",
        "display" : "Doctor's office",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Arztpraxis"
        },
        {
          "language" : "fr-CH",
          "value" : "Cabinet médical"
        },
        {
          "language" : "it-CH",
          "value" : "Studio medico"
        }]
      },
      {
        "code" : "22232009",
        "display" : "Hospital",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Spital"
        },
        {
          "language" : "it-CH",
          "value" : "Hôpital"
        },
        {
          "language" : "it-CH",
          "value" : "Ospedale"
        }]
      },
      {
        "code" : "274409007",
        "display" : "Special care unit",
        "designation" : [{
          "language" : "de-CH",
          "value" : "Pflegeheim"
        },
        {
          "language" : "fr-CH",
          "value" : "hospice"
        },
        {
          "language" : "it-CH",
          "value" : "Casa anziani"
        }]
      },
      {
        "code" : "74964007",
        "display" : "other",
        "designation" : [{
          "language" : "de-CH",
          "value" : "andere / anderes"
        },
        {
          "language" : "fr-CH",
          "value" : "autre"
        },
        {
          "language" : "it-CH",
          "value" : "altro"
        }]
      }]
    },
    {
      "system" : "http://fhir.ch/ig/ch-ems/CodeSystem/IVR",
      "concept" : [{
        "code" : "1000054",
        "display" : "unknown",
        "designation" : [{
          "language" : "de-CH",
          "value" : "unbekannt"
        },
        {
          "language" : "fr-CH",
          "value" : "inconnu"
        },
        {
          "language" : "it-CH",
          "value" : "sconosciuto"
        }]
      }]
    }]
  }
}

```
