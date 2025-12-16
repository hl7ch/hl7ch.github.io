# Eisode of Care - CH ORF (R4) v3.0.2

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **Eisode of Care**

## Example EpisodeOfCare: Eisode of Care

Profile: [CH ORF Episode of Care](StructureDefinition-ch-orf-episodeofcare.md)

**status**: Active

### StatusHistories

| | | |
| :--- | :--- | :--- |
| - | **Status** | **Period** |
| * | Active | 2022-06-30 --> 2022-07-28 |

**patient**: [Susanna Ufferer (official) Female, DoB: 1970-03-14](Patient-SUfferer.md)

**managingOrganization**: [Organization Spital Trubschachen](Organization-OrganizationSpitalTrubschachen.md)



## Resource Content

```json
{
  "resourceType" : "EpisodeOfCare",
  "id" : "ChOrfEpisodeOfCareSUfferer",
  "meta" : {
    "profile" : [
      "http://fhir.ch/ig/ch-orf/StructureDefinition/ch-orf-episodeofcare"
    ]
  },
  "status" : "active",
  "statusHistory" : [
    {
      "status" : "active",
      "period" : {
        "start" : "2022-06-30",
        "end" : "2022-07-28"
      }
    }
  ],
  "patient" : {
    "reference" : "Patient/SUfferer"
  },
  "managingOrganization" : {
    "reference" : "Organization/OrganizationSpitalTrubschachen"
  }
}

```
