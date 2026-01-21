# CH ELM Expecting Organism Specification - CH ELM (R4) v1.13.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Expecting Organism Specification**

## ValueSet: CH ELM Expecting Organism Specification 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-expecting-organism-specification | *Version*:1.13.1 |
| Active as of 2026-01-21 | *Computable Name*:ChElmExpectingOrganismSpecification |
| **Copyright/Legal**: CC0-1.0 | |

 
This CH ELM value set includes the leading codes for the laboratory test results, which have to be completed by another code for the expecting organism. 

 **References** 

This value set is not used here; it may be used elsewhere (e.g. specifications and/or implementations that use this content)

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
  "id" : "ch-elm-expecting-organism-specification",
  "url" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-expecting-organism-specification",
  "version" : "1.13.1",
  "name" : "ChElmExpectingOrganismSpecification",
  "title" : "CH ELM Expecting Organism Specification",
  "status" : "active",
  "experimental" : false,
  "date" : "2026-01-21T11:21:00+00:00",
  "publisher" : "Federal Office of Public Health FOPH",
  "contact" : [
    {
      "name" : "Federal Office of Public Health FOPH",
      "telecom" : [
        {
          "system" : "url",
          "value" : "https://www.bag.admin.ch/bag/en/home/das-bag/kontakt-standort.html"
        }
      ]
    }
  ],
  "description" : "This CH ELM value set includes the leading codes for the laboratory test results, which have to be completed by another code for the expecting organism.",
  "jurisdiction" : [
    {
      "coding" : [
        {
          "system" : "urn:iso:std:iso:3166",
          "code" : "CH"
        }
      ]
    }
  ],
  "copyright" : "CC0-1.0",
  "compose" : {
    "include" : [
      {
        "system" : "http://loinc.org",
        "concept" : [
          {
            "code" : "100911-7",
            "display" : "Campylobacter sp [Presence] in Stool by Organism specific culture"
          },
          {
            "code" : "101003-2",
            "display" : "Monkeypox virus clade [Type] in Specimen by Sequencing"
          },
          {
            "code" : "101219-4",
            "display" : "Legionella sp DNA [Presence] in Specimen by NAA with probe detection"
          },
          {
            "code" : "104376-9",
            "display" : "Diphtheria toxin DNA [Presence] in Specimen by NAA with probe detection"
          },
          {
            "code" : "14357-8",
            "display" : "Microscopic observation [Identifier] in Cerebral spinal fluid by Gram stain"
          },
          {
            "code" : "17563-8",
            "display" : "Salmonella sp identified in Specimen by Organism specific culture"
          },
          {
            "code" : "22826-2",
            "display" : "Influenza virus A identified in Specimen by Bioassay"
          },
          {
            "code" : "24102-6",
            "display" : "Corynebacterium toxin [Presence] in Specimen by Immune diffusion (ID)"
          },
          {
            "code" : "32781-7",
            "display" : "Legionella sp Ag [Presence] in Urine"
          },
          {
            "code" : "38353-9",
            "display" : "Streptococcus sp identified in Specimen by Organism specific culture"
          },
          {
            "code" : "39025-2",
            "display" : "Influenza virus A hemagglutinin cDNA [Identifier] in Specimen by Sequencing"
          },
          {
            "code" : "41625-5",
            "display" : "Brucella sp DNA [Identifier] in Specimen by NAA with probe detection"
          },
          {
            "code" : "43389-6",
            "display" : "Streptococcus sp identified in Isolate by Organism specific culture"
          },
          {
            "code" : "46454-5",
            "display" : "Shigella sp [Presence] in Specimen by Organism specific culture"
          },
          {
            "code" : "46732-4",
            "display" : "Francisella tularensis subtype [Identifier] in Specimen by NAA with probe detection"
          },
          {
            "code" : "47085-6",
            "display" : "Plasmodium sp DNA [Presence] in Blood by NAA with probe detection"
          },
          {
            "code" : "49612-5",
            "display" : "Salmonella sp DNA [Presence] in Specimen by NAA with probe detection"
          },
          {
            "code" : "50687-3",
            "display" : "Plasmodium sp Ag [Presence] in Blood"
          },
          {
            "code" : "50697-2",
            "display" : "Influenza virus A Ag [Identifier] in Isolate"
          },
          {
            "code" : "51587-4",
            "display" : "Plasmodium sp [Presence] in Blood by Light microscopy"
          },
          {
            "code" : "534-8",
            "display" : "Mycobacterium sp identified in Cerebral spinal fluid by Organism specific culture"
          },
          {
            "code" : "539-7",
            "display" : "Mycobacterium sp identified in Sputum by Organism specific culture"
          },
          {
            "code" : "540-5",
            "display" : "Mycobacterium sp identified in Tissue by Organism specific culture"
          },
          {
            "code" : "541-3",
            "display" : "Mycobacterium sp identified in Urine by Organism specific culture"
          },
          {
            "code" : "543-9",
            "display" : "Mycobacterium sp identified in Specimen by Organism specific culture"
          },
          {
            "code" : "552-0",
            "display" : "Brucella sp identified in Specimen by Organism specific culture"
          },
          {
            "code" : "58473-0",
            "display" : "Haemophilus influenzae serotype DNA [Identifier] in Specimen by NAA with probe detection"
          },
          {
            "code" : "589-2",
            "display" : "Legionella sp identified in Bronchial specimen by Organism specific culture"
          },
          {
            "code" : "590-0",
            "display" : "Legionella sp identified in Sputum by Organism specific culture"
          },
          {
            "code" : "593-4",
            "display" : "Legionella sp identified in Specimen by Organism specific culture"
          },
          {
            "code" : "59423-4",
            "display" : "Influenza virus A hemagglutinin type RNA [Identifier] in Specimen by NAA with probe detection"
          },
          {
            "code" : "60422-3",
            "display" : "Measles virus genotype [Identifier] in Specimen by NAA with probe detection"
          },
          {
            "code" : "65756-9",
            "display" : "Salmonella sp serovar [Type] in Isolate"
          },
          {
            "code" : "6578-9",
            "display" : "Vibrio sp identified in Blood by Organism specific culture"
          },
          {
            "code" : "6579-7",
            "display" : "Vibrio sp identified in Stool by Organism specific culture"
          },
          {
            "code" : "6581-3",
            "display" : "Vibrio sp identified in Specimen by Organism specific culture"
          },
          {
            "code" : "6584-7",
            "display" : "Virus identified in Specimen by Culture"
          },
          {
            "code" : "6600-1",
            "display" : "Haemophilus sp identified in Specimen by Organism specific culture"
          },
          {
            "code" : "6604-3",
            "display" : "Influenza virus identified in Specimen by Organism specific culture"
          },
          {
            "code" : "6609-2",
            "display" : "Listeria sp identified in Specimen by Organism specific culture"
          },
          {
            "code" : "70569-9",
            "display" : "Plasmodium sp Ag [Identifier] in Blood by Rapid immunoassay"
          },
          {
            "code" : "74037-3",
            "display" : "Transmissible spongiform encephalopathy [Identifier] in Brain by Light microscopy"
          },
          {
            "code" : "75756-7",
            "display" : "Bacteria identified in Isolate by MS.MALDI-TOF"
          },
          {
            "code" : "7899-8",
            "display" : "Hantavirus RNA [Presence] in Serum by NAA with probe detection"
          },
          {
            "code" : "82300-5",
            "display" : "Shigella sp [Presence] in Stool by Culture"
          },
          {
            "code" : "82301-3",
            "display" : "Salmonella sp [Presence] in Stool by Culture"
          },
          {
            "code" : "86520-4",
            "display" : "Hantavirus RNA [Presence] in Blood by NAA with probe detection"
          },
          {
            "code" : "88585-5",
            "display" : "Legionella sp identified in Lower respiratory specimen by Organism specific culture"
          },
          {
            "code" : "88588-9",
            "display" : "Legionella sp DNA [Identifier] in Lower respiratory specimen by NAA with probe detection"
          },
          {
            "code" : "90066-2",
            "display" : "Corynebacterium sp identified in Isolate by Organism specific culture"
          },
          {
            "code" : "92786-3",
            "display" : "Corynebacterium sp DNA [Presence] by NAA with probe detection in Positive blood culture"
          },
          {
            "code" : "93385-3",
            "display" : "Salmonella sp DNA [Presence] by NAA with probe detection in Positive blood culture"
          },
          {
            "code" : "97313-1",
            "display" : "Salmonella sp DNA [Presence] in Stool by NAA with probe detection"
          },
          {
            "code" : "97513-6",
            "display" : "Campylobacter sp [Presence] in Specimen by Organism specific culture"
          },
          {
            "code" : "9823-6",
            "display" : "Mycobacterium sp identified in Bronchial specimen by Organism specific culture"
          }
        ]
      }
    ]
  }
}

```
