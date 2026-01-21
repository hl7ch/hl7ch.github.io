# CH ELM Expecting Specimen Specification To Results Completion Vs - CH ELM (R4) v1.13.1

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Expecting Specimen Specification To Results Completion Vs**

## ConceptMap: CH ELM Expecting Specimen Specification To Results Completion Vs 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-expecting-specimen-specification-to-results-completion-vs | *Version*:1.13.1 |
| Active as of 2026-01-21 | *Computable Name*:ChElmExpectingSpecimenSpecificationToResultsCompletionVs |
| **Copyright/Legal**: CC0-1.0 | |

 
This CH ELM concept map shows which leading codes have to be completed by an additional code to specify the specimen. The target code shows the URL of the value set containing the permitted codes for the specimen specification. 



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "ch-elm-expecting-specimen-specification-to-results-completion-vs",
  "url" : "http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-expecting-specimen-specification-to-results-completion-vs",
  "version" : "1.13.1",
  "name" : "ChElmExpectingSpecimenSpecificationToResultsCompletionVs",
  "title" : "CH ELM Expecting Specimen Specification To Results Completion Vs",
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
  "description" : "This CH ELM concept map shows which leading codes have to be completed by an additional code to specify the specimen. The target code shows the URL of the value set containing the permitted codes for the specimen specification.",
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
  "sourceCanonical" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-expecting-specimen-specification",
  "targetCanonical" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-completion-vs",
  "group" : [
    {
      "source" : "http://loinc.org",
      "target" : "http://fhir.ch/ig/ch-elm/CodeSystem/ch-elm-results-completion-vs",
      "element" : [
        {
          "code" : "16134-9",
          "display" : "Neisseria meningitidis [Presence] in Specimen by Organism specific culture",
          "target" : [
            {
              "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-sterile-spec",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "21613-5",
          "display" : "Chlamydia trachomatis DNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-geni-spec",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "29907-3",
          "display" : "Haemophilus influenzae B DNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-sterile-spec",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "31777-6",
          "display" : "Chlamydia trachomatis Ag [Presence] in Specimen",
          "target" : [
            {
              "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-geni-spec",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "31912-9",
          "display" : "Neisseria meningitidis Ag [Presence] in Specimen",
          "target" : [
            {
              "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-sterile-spec",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "31969-9",
          "display" : "Streptococcus pneumoniae Ag [Presence] in Specimen",
          "target" : [
            {
              "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-sterile-spec",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "38353-9",
          "display" : "Streptococcus sp identified in Specimen by Organism specific culture",
          "target" : [
            {
              "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-sterile-spec",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "43304-5",
          "display" : "Chlamydia trachomatis rRNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-geni-spec",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "49671-1",
          "display" : "Neisseria meningitidis DNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-sterile-spec",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "49672-9",
          "display" : "Streptococcus pneumoniae DNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-sterile-spec",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "58473-0",
          "display" : "Haemophilus influenzae serotype DNA [Identifier] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-sterile-spec",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "61366-1",
          "display" : "Haemophilus influenzae DNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-sterile-spec",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "61369-5",
          "display" : "Listeria monocytogenes DNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-lis-spec",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "6349-5",
          "display" : "Chlamydia trachomatis [Presence] in Specimen by Organism specific culture",
          "target" : [
            {
              "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-geni-spec",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "6600-1",
          "display" : "Haemophilus sp identified in Specimen by Organism specific culture",
          "target" : [
            {
              "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-sterile-spec",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "6609-2",
          "display" : "Listeria sp identified in Specimen by Organism specific culture",
          "target" : [
            {
              "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-lis-spec",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "69410-9",
          "display" : "Haemophilus influenzae [Identifier] in Specimen by Organism specific culture",
          "target" : [
            {
              "code" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-sterile-spec",
              "equivalence" : "relatedto"
            }
          ]
        }
      ]
    }
  ]
}

```
