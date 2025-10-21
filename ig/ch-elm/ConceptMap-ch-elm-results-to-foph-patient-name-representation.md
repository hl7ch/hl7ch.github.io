# CH ELM Results To FOPH Patient Name Representation - CH ELM (R4) v1.12.0

* [**Table of Contents**](toc.md)
* [**Artifacts Summary**](artifacts.md)
* **CH ELM Results To FOPH Patient Name Representation**

## ConceptMap: CH ELM Results To FOPH Patient Name Representation 

| | |
| :--- | :--- |
| *Official URL*:http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-to-foph-patient-name-representation | *Version*:1.12.0 |
| Active as of 2025-10-21 | *Computable Name*:ChElmResultsToFophPatientNameRepresentation |
| **Copyright/Legal**: CC0-1.0 | |

 
This CH ELM concept map specifies the required mode of patient representation for each leading code. It determines whether the full name, initials, or a unique code (e.g., for HIV patients) should be used, based on the specific LOINC code associated with the laboratory data. This ensures consistent and appropriate handling of patient identity in accordance with the type of pathogen reported. 

Mapping from [CH ELM Results Laboratory Observation](ValueSet-ch-elm-results-laboratory-observation.md) to [CH ELM FOPH Patient Name Representation](ValueSet-ch-elm-foph-patient-name-representation.md)

**Group 1**Mapping from [Logical Observation Identifiers, Names and Codes (LOINC)](http://terminology.hl7.org/6.3.0/CodeSystem-v3-loinc.html) to [CH ELM FOPH Patient Name Representation](CodeSystem-ch-elm-foph-patient-name-representation.md)

* **Source Code**: 100383-9 (Monkeypox virus DNA [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 100749-1 (Legionella pneumophila serogroup 1 [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 100888-7 (Monkeypox virus clade II DNA [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 100889-5 (Monkeypox virus clade I DNA [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 100911-7 (Campylobacter sp [Presence] in Stool by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 100965-3 (Dengue virus IgG Ab [Interpretation] in Serum, Plasma or Blood)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 101003-2 (Monkeypox virus clade [Type] in Specimen by Sequencing)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 101219-4 (Legionella sp DNA [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 101307-7 (Plasmodium vivax+ovale DNA [Presence] in Blood by NAA with non-probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 101364-8 (Francisella tularensis DNA [Presence] in Blood by NAA with non-probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 101373-9 (Francisella tularensis DNA [Presence] in Sputum by NAA with non-probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 101423-2 (Influenza virus A H1 RNA [Presence] in Respiratory system specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 101424-0 (Influenza virus A H3 RNA [Presence] in Respiratory system specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 101662-5 (Abnormal Prion Protein [Presence] in Cerebral spinal fluid by RT-QuIC)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 101802-7 (Brucella sp IgA Ab [Presence] in Serum)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 103168-1 (Campylobacter coli+jejuni DNA [Presence] in Wound by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 103717-5 (Crimean-Congo hemorrhagic fever virus RNA [Presence] in Blood by NAA with non-probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 103719-1 (Lassa virus RNA [Presence] in Blood by NAA with non-probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 104371-0 (Corynebacterium pseudotuberculosis [Presence] in Specimen by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 104372-8 (Corynebacterium pseudotuberculosis [Presence] in Upper respiratory specimen by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 104373-6 (Corynebacterium ulcerans [Presence] in Specimen by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 104374-4 (Corynebacterium ulcerans [Presence] in Upper respiratory specimen by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 104375-1 (Corynebacterium ulcerans DNA [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 104376-9 (Diphtheria toxin DNA [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 104395-9 (European tick borne encephalitis virus IgG Ab [Titer] in Serum by Immunoassay --2nd specimen)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 104407-2 (Hantavirus IgG Ab [Titer] in Serum by Immunoassay --2nd specimen)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 104454-4 (Trichinella spiralis IgG Ab [Titer] in Serum by Immunoassay --2nd specimen)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 104476-7 (Zika virus IgG Ab [Titer] in Serum by Immunoassay --2nd specimen)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 105065-7 (Shigella species+EIEC invasion plasmid antigen H ipaH gene [Presence] in Specimen)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 105640-7 (Campylobacter sp DNA [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 106554-9 (Escherichia coli shiga-like toxin DNA [Presence] in Stool by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 107242-0 (Tick-borne encephalitis virus Ab [Interpretation] in Serum or Plasma)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 11259-9 (Hepatitis C virus RNA [Presence] in Serum or Plasma by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 11469-4 (Bacillus anthracis [Presence] in Specimen by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 11477-7 (Microscopic observation [Identifier] in Sputum by Acid fast stain)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 11479-3 (Microscopic observation [Identifier] in Tissue by Acid fast stain)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 11480-1 (Microscopic observation [Identifier] in Urine by Acid fast stain)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 11545-1 (Microscopic observation [Identifier] in Specimen by Acid fast stain)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 13954-3 (Hepatitis B virus e Ag [Presence] in Serum or Plasma by Immunoassay)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 14127-5 (Neisseria gonorrhoeae [Presence] in Anal by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials-or-vctcode
* **Source Code**: 14357-8 (Microscopic observation [Identifier] in Cerebral spinal fluid by Gram stain)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 14463-4 (Chlamydia trachomatis [Presence] in Cervix by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials-or-vctcode
* **Source Code**: 14464-2 (Chlamydia trachomatis [Presence] in Vaginal fluid by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials-or-vctcode
* **Source Code**: 14465-9 (Chlamydia trachomatis [Presence] in Urethra by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials-or-vctcode
* **Source Code**: 16134-9 (Neisseria meningitidis [Presence] in Specimen by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 16600-9 (Chlamydia trachomatis rRNA [Presence] in Genital specimen by Probe)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials-or-vctcode
* **Source Code**: 16676-9 (Corynebacterium diphtheriae [Presence] in Specimen by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 17552-1 (Rubella virus IgM Ab [Presence] in Cerebral spinal fluid)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 17563-8 (Salmonella sp identified in Specimen by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 17735-2 (Trichinella spiralis IgM Ab [Presence] in Serum)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 20458-6 (Rubella virus IgG Ab [Interpretation] in Serum)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 20489-1 (Streptococcus pneumoniae Ag [Presence] in Cerebral spinal fluid)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 21190-4 (Chlamydia trachomatis DNA [Presence] in Cervix by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials-or-vctcode
* **Source Code**: 21191-2 (Chlamydia trachomatis DNA [Presence] in Urethra by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials-or-vctcode
* **Source Code**: 21262-1 (Escherichia coli shiga-like toxin [Presence] in Stool by Immunoassay)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 21363-7 (Legionella pneumophila DNA [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 21415-5 (Neisseria gonorrhoeae DNA [Presence] in Urethra by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials-or-vctcode
* **Source Code**: 21416-3 (Neisseria gonorrhoeae DNA [Presence] in Urine by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials-or-vctcode
* **Source Code**: 21503-8 (Measles virus IgM Ab [Presence] in Serum)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 21613-5 (Chlamydia trachomatis DNA [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials-or-vctcode
* **Source Code**: 22314-9 (Hepatitis A virus IgM Ab [Presence] in Serum)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 22502-9 (Measles virus IgG Ab [Titer] in Serum)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 22826-2 (Influenza virus A identified in Specimen by Bioassay)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 22866-8 (Bacillus anthracis Ag [Presence] in Tissue by Immunofluorescence)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 22867-6 (Bacillus anthracis Ag [Presence] in Specimen by Immunofluorescence)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 23024-3 (Coxiella burnetii DNA [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 23126-6 (Francisella tularensis Ag [Presence] in Tissue by Immune stain)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 23130-8 (Francisella tularensis DNA [Presence] in Tissue by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 23499-7 (Trichinella spiralis [Presence] in Tissue by Light microscopy)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 23838-6 (Chlamydia trachomatis rRNA [Presence] in Genital fluid by Probe)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials-or-vctcode
* **Source Code**: 24002-8 (Microscopic observation [Identifier] in Bronchial specimen by Acid fast stain)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 24102-6 (Corynebacterium toxin [Presence] in Specimen by Immune diffusion (ID))
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 24111-7 (Neisseria gonorrhoeae DNA [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials-or-vctcode
* **Source Code**: 24113-3 (Hepatitis B virus core IgM Ab [Presence] in Serum or Plasma by Immunoassay)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 24116-6 (Rubella virus IgM Ab [Presence] in Serum or Plasma by Immunoassay)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 24396-4 (Brucella sp IgG Ab [Presence] in Serum)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 24397-2 (Brucella sp IgM Ab [Presence] in Serum)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 25338-5 (Dengue virus IgM Ab [Presence] in Serum)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 26620-5 (Hantavirus IgG Ab [Presence] in Serum)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 29566-7 (West Nile virus IgG Ab [Presence] in Serum by Immunoassay)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 29610-3 (Hepatitis B virus DNA [Presence] in Serum or Plasma by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 29907-3 (Haemophilus influenzae B DNA [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 31204-1 (Hepatitis B virus core IgM Ab [Presence] in Serum)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 31314-8 (Coxiella burnetii phase 2 IgG Ab [Presence] in Serum)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 31315-5 (Coxiella burnetii phase 2 IgM Ab [Presence] in Serum)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 31616-6 (Rubella virus IgM Ab [Presence] in Serum)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 31703-2 (West Nile virus IgM Ab [Presence] in Cerebral spinal fluid)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 31726-3 (Bacillus anthracis Ag [Presence] in Specimen)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 31777-6 (Chlamydia trachomatis Ag [Presence] in Specimen)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials-or-vctcode
* **Source Code**: 31798-2 (Dengue virus Ag [Presence] in Serum)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 31799-0 (Dengue virus Ag [Presence] in Specimen)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 31828-7 (Francisella tularensis Ag [Presence] in Serum)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 31829-5 (Francisella tularensis Ag [Presence] in Specimen)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 31844-4 (Hepatitis B virus e Ag [Presence] in Serum)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 31859-2 (Influenza virus A Ag [Presence] in Specimen)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 31864-2 (Influenza virus B Ag [Presence] in Specimen)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 31868-3 (Legionella pneumophila 1 Ag [Presence] in Urine)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 31870-9 (Legionella pneumophila Ag [Presence] in Urine)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 31879-0 (Measles virus Ag [Presence] in Nose)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 31881-6 (Measles virus Ag [Presence] in Serum or Plasma)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 31883-2 (Measles virus Ag [Presence] in Sputum)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 31884-0 (Measles virus Ag [Presence] in Throat)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 31887-3 (Measles virus Ag [Presence] in Specimen)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 31912-9 (Neisseria meningitidis Ag [Presence] in Specimen)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 31969-9 (Streptococcus pneumoniae Ag [Presence] in Specimen)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 31989-7 (14-3-3 Ag [Presence] in Cerebral spinal fluid)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 32131-5 (Hantavirus IgM Ab [Presence] in Serum)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 32188-5 (Microscopic observation [Identifier] in Cerebral spinal fluid by Acid fast stain)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 32705-6 (Neisseria gonorrhoeae DNA [Presence] in Vaginal fluid by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials-or-vctcode
* **Source Code**: 32781-7 (Legionella sp Ag [Presence] in Urine)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 33676-8 (Francisella tularensis [Presence] in Specimen by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 33679-2 (Francisella tularensis DNA [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 33685-9 (Yersinia pestis [Presence] in Specimen by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 33687-5 (Yersinia pestis Ag [Presence] in Specimen by Immunofluorescence)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 33691-7 (Yersinia pestis DNA [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 33696-6 (Clostridium botulinum toxin [Presence] in Specimen by Mouse bioassay)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 34460-6 (West Nile virus RNA [Presence] in Blood by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 34461-4 (West Nile virus RNA [Presence] in Cerebral spinal fluid by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 34487-9 (Influenza virus A RNA [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 38270-5 (Influenza virus A H7 RNA [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 38272-1 (Influenza virus A H5 RNA [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 38275-4 (Transmissible spongiform encephalopathy [Presence] in Brain by Light microscopy)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 38353-9 (Streptococcus sp identified in Specimen by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 38379-4 (Mycobacterium tuberculosis complex DNA [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 38382-8 (Influenza virus B [Presence] in Specimen by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 39007-0 (Hepatitis B virus e Ag [Presence] in Specimen)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 39025-2 (Influenza virus A hemagglutinin cDNA [Identifier] in Specimen by Sequencing)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 40614-0 (Brucella sp Ab [Presence] in Serum by Agglutination)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 40669-4 (Rubella virus IgM Ab [Presence] in Cerebral spinal fluid by Immunoassay)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 40982-1 (Influenza virus B RNA [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 41216-3 (Yellow fever virus IgM Ab [Presence] in Serum)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 41447-4 (Plasmodium falciparum DNA [Presence] in Blood by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 41448-2 (Plasmodium malariae DNA [Presence] in Blood by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 41449-0 (Plasmodium ovale DNA [Presence] in Blood by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 41450-8 (Plasmodium vivax DNA [Presence] in Blood by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 41458-1 (SARS coronavirus RNA [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 41623-0 (Bacillus anthracis DNA [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 41625-5 (Brucella sp DNA [Identifier] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 41626-3 (Brucella sp DNA [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 41636-2 (Ebola virus RNA [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 41638-8 (Marburg virus RNA [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 41763-4 (Rubella virus IgG Ab [Titer] in Serum)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 41856-6 (Variola virus DNA [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 42931-6 (Chlamydia trachomatis rRNA [Presence] in Urine by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials-or-vctcode
* **Source Code**: 43304-5 (Chlamydia trachomatis rRNA [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials-or-vctcode
* **Source Code**: 43305-2 (Neisseria gonorrhoeae rRNA [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials-or-vctcode
* **Source Code**: 43389-6 (Streptococcus sp identified in Isolate by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 44012-3 (Measles virus IgG and IgM [Interpretation] in Serum)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 44797-9 (Brucella sp [Presence] in Specimen by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 45084-1 (Chlamydia trachomatis DNA [Presence] in Vaginal fluid by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials-or-vctcode
* **Source Code**: 45090-8 (Chlamydia trachomatis DNA [Presence] in Anal by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials-or-vctcode
* **Source Code**: 45093-2 (Chlamydia trachomatis [Presence] in Anal by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials-or-vctcode
* **Source Code**: 45095-7 (Chlamydia trachomatis [Presence] in Genital specimen by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials-or-vctcode
* **Source Code**: 46454-5 (Shigella sp [Presence] in Specimen by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 46732-4 (Francisella tularensis subtype [Identifier] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 47085-6 (Plasmodium sp DNA [Presence] in Blood by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 47387-6 (Neisseria gonorrhoeae DNA [Presence] in Genital specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials-or-vctcode
* **Source Code**: 48310-7 (Influenza virus A [Presence] in Specimen by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 48508-6 (Measles virus RNA [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 49124-1 (Coxiella burnetii identified in Specimen by Sequencing)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 49521-8 (Influenza virus A H1 RNA [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 49524-2 (Influenza virus A H3 RNA [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 49528-3 (Influenza virus A H9 RNA [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 49612-5 (Salmonella sp DNA [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 49671-1 (Neisseria meningitidis DNA [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 49672-9 (Streptococcus pneumoniae DNA [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 5007-0 (Hepatitis B virus DNA [Presence] in Blood by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 5009-6 (Hepatitis B virus DNA [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 5010-4 (Hepatitis C virus RNA [Presence] in Blood by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 5012-0 (Hepatitis C virus RNA [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 50387-0 (Chlamydia trachomatis rRNA [Presence] in Cervix by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials-or-vctcode
* **Source Code**: 50388-8 (Neisseria gonorrhoeae rRNA [Presence] in Cervix by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials-or-vctcode
* **Source Code**: 50687-3 (Plasmodium sp Ag [Presence] in Blood)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 50697-2 (Influenza virus A Ag [Identifier] in Isolate)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 51578-3 (Chlamydia trachomatis DNA [Presence] in Semen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials-or-vctcode
* **Source Code**: 51587-4 (Plasmodium sp [Presence] in Blood by Light microscopy)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 51646-8 (Rabies virus RNA [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 51664-1 (Chikungunya virus RNA [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 51939-7 (Escherichia coli shiga-like toxin 2 [Presence] in Stool by Immunoassay)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 51940-5 (Escherichia coli shiga-like toxin 1 [Presence] in Stool by Immunoassay)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 5195-3 (Hepatitis B virus surface Ag [Presence] in Serum)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 5196-1 (Hepatitis B virus surface Ag [Presence] in Serum or Plasma by Immunoassay)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 5199-5 (Hepatitis C virus Ab [Presence] in Serum by Immunoblot)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 52986-7 (Rubella virus IgG Ab avidity [Ratio] in Serum by Immunoassay)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 534-8 (Mycobacterium sp identified in Cerebral spinal fluid by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 53607-8 (Haemophilus influenzae B DNA [Presence] in Blood by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 53879-3 (Neisseria gonorrhoeae rRNA [Presence] in Vaginal fluid by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials-or-vctcode
* **Source Code**: 53917-1 (Streptococcus pneumoniae DNA [Presence] in Blood by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 53925-4 (Chlamydia trachomatis rRNA [Presence] in Urethra by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials-or-vctcode
* **Source Code**: 53926-2 (Chlamydia trachomatis rRNA [Presence] in Vaginal fluid by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials-or-vctcode
* **Source Code**: 53927-0 (Neisseria gonorrhoeae rRNA [Presence] in Urethra by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials-or-vctcode
* **Source Code**: 53941-1 (Vibrio cholerae toxin Ag [Presence] in Isolate)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 53942-9 (Vibrio cholerae toxin ctx gene [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 53946-0 (Escherichia coli shiga-like toxin identified in Specimen)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 539-7 (Mycobacterium sp identified in Sputum by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 540-5 (Mycobacterium sp identified in Tissue by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 54091-4 (Rubella virus RNA [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 541-3 (Mycobacterium sp identified in Urine by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 543-9 (Mycobacterium sp identified in Specimen by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 552-0 (Brucella sp identified in Specimen by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 55465-9 (Influenza virus A H1 2009 pandemic RNA [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 56129-0 (Chikungunya virus IgG Ab [Presence] in Serum or Plasma by Immunofluorescence)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 56131-6 (Chikungunya virus IgM Ab [Presence] in Serum or Plasma by Immunofluorescence)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 56475-7 (Salmonella sp antigenic formula [Identifier] in Isolate by Agglutination)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 57287-5 (Chlamydia trachomatis rRNA [Presence] in Anal by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials-or-vctcode
* **Source Code**: 57458-2 (Neisseria gonorrhoeae rRNA [Presence] in Anal by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials-or-vctcode
* **Source Code**: 57934-2 (Chikungunya virus IgM Ab [Presence] in Serum or Plasma)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 58473-0 (Haemophilus influenzae serotype DNA [Identifier] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 589-2 (Legionella sp identified in Bronchial specimen by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 590-0 (Legionella sp identified in Sputum by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 593-4 (Legionella sp identified in Specimen by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 59423-4 (Influenza virus A hemagglutinin type RNA [Identifier] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 60255-7 (Neisseria gonorrhoeae rRNA [Presence] in Throat by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials-or-vctcode
* **Source Code**: 60256-5 (Neisseria gonorrhoeae rRNA [Presence] in Urine by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials-or-vctcode
* **Source Code**: 60261-5 (Coxiella burnetii DNA [Presence] in Serum or Plasma by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 60274-8 (Rubella virus RNA [Presence] in Serum or Plasma by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 60422-3 (Measles virus genotype [Identifier] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 60534-5 (SARS coronavirus RNA [Presence] in Serum or Plasma by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 60546-9 (Polio virus identified [Type] in Isolate by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 61366-1 (Haemophilus influenzae DNA [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 61369-5 (Listeria monocytogenes DNA [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 61371-1 (Vibrio cholerae DNA [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 62469-2 (HIV 1 RNA [Units/volume] (viral load) in Serum or Plasma by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: hiv-code
* **Source Code**: 6349-5 (Chlamydia trachomatis [Presence] in Specimen by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials-or-vctcode
* **Source Code**: 6356-0 (Chlamydia trachomatis DNA [Presence] in Genital specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials-or-vctcode
* **Source Code**: 6357-8 (Chlamydia trachomatis DNA [Presence] in Urine by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials-or-vctcode
* **Source Code**: 6387-5 (Dengue virus DNA [Presence] in Specimen by Probe)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 6508-6 (Neisseria meningitidis Ag [Presence] in Cerebral spinal fluid)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 6532-6 (Rabies virus Ag [Presence] in Specimen by Immunofluorescence)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 6539-1 (Rabies virus identified in Specimen by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 6548-2 (Rubella virus identified in Serum by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 65756-9 (Salmonella sp serovar [Type] in Isolate)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 6578-9 (Vibrio sp identified in Blood by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 6579-7 (Vibrio sp identified in Stool by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 6581-3 (Vibrio sp identified in Specimen by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 6584-7 (Virus identified in Specimen by Culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: conditional
* **Source Code**: 6600-1 (Haemophilus sp identified in Specimen by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 6604-3 (Influenza virus identified in Specimen by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 6609-2 (Listeria sp identified in Specimen by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 67561-1 (Corynebacterium diphtheriae DNA [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 6811-4 (Dengue virus IgG Ab [Titer] in Serum)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 688-2 (Neisseria gonorrhoeae [Presence] in Cervix by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials-or-vctcode
* **Source Code**: 691-6 (Neisseria gonorrhoeae [Presence] in Genital specimen by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials-or-vctcode
* **Source Code**: 693-2 (Neisseria gonorrhoeae [Presence] in Vaginal fluid by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials-or-vctcode
* **Source Code**: 694-0 (Neisseria gonorrhoeae [Presence] in Semen by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials-or-vctcode
* **Source Code**: 69410-9 (Haemophilus influenzae [Identifier] in Specimen by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 69577-5 (Hepatitis E virus RNA [Presence] in Blood by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 696-5 (Neisseria gonorrhoeae [Presence] in Throat by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials-or-vctcode
* **Source Code**: 697-3 (Neisseria gonorrhoeae [Presence] in Urethra by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials-or-vctcode
* **Source Code**: 69765-6 (Rubella virus IgM Ab [Presence] in Body fluid by Immunoassay)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 698-1 (Neisseria gonorrhoeae [Presence] in Specimen by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials-or-vctcode
* **Source Code**: 70242-3 (Shigella species+EIEC invasion plasmid antigen H ipaH gene [Presence] in Stool by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 70568-1 (Plasmodium knowlesi DNA [Presence] in Blood by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 70569-9 (Plasmodium sp Ag [Identifier] in Blood by Rapid immunoassay)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 70858-6 (Rabies virus neutralizing antibody [Presence] in Serum by Neutralization test)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 71782-7 (Yellow fever virus IgM Ab [Presence] in Cerebral spinal fluid by Immunoassay)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 72307-2 (Brucella sp IgG Ab [Titer] in Serum --2nd specimen)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 73907-8 (Polio virus identified in Specimen by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 74037-3 (Transmissible spongiform encephalopathy [Identifier] in Brain by Light microscopy)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 74785-7 (Influenza virus B Victoria lineage RNA [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 74786-5 (Influenza virus B Yamagata lineage RNA [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 75756-7 (Bacteria identified in Isolate by MS.MALDI-TOF)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: conditional
* **Source Code**: 76078-5 (Influenza virus A RNA [Presence] in Nasopharynx by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 76080-1 (Influenza virus B RNA [Presence] in Nasopharynx by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 76626-1 (Measles virus [Presence] in Specimen by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 76772-3 (Plasmodium falciparum Ag [Presence] in Blood by Rapid immunoassay)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 77026-3 (Influenza virus A H1 RNA [Presence] in Nasopharynx by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 77027-1 (Influenza virus A H3 RNA [Presence] in Nasopharynx by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 77028-9 (Influenza virus A H1 2009 pandemic RNA [Presence] in Nasopharynx by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 77685-6 (HIV 1 and 2 IgG Ab [Identifier] in Serum or Plasma by Immunoblot)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: hiv-code
* **Source Code**: 77955-3 (Yellow fever virus IgM Ab [Presence] in Serum by Immunofluorescence)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 7889-9 (Francisella tularensis IgG Ab [Presence] in Serum)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 7890-7 (Francisella tularensis IgM Ab [Presence] in Serum)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 7899-8 (Hantavirus RNA [Presence] in Serum by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 7904-6 (Hepatitis A virus RNA [Presence] in Serum by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 79189-7 (Hepatitis C virus core Ag [Presence] in Serum or Plasma by Immunoassay)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 79190-5 (Zika virus RNA [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 79386-9 (Escherichia coli Stx1 toxin stx1 gene [Presence] in Stool by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 79387-7 (Escherichia coli Stx2 toxin stx2 gene [Presence] in Stool by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 7964-0 (Measles virus RNA [Presence] in Nose by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 80363-5 (Chlamydia trachomatis DNA [Presence] in Anorectal by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials-or-vctcode
* **Source Code**: 80364-3 (Chlamydia trachomatis rRNA [Presence] in Anorectal by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials-or-vctcode
* **Source Code**: 80366-8 (Neisseria gonorrhoeae rRNA [Presence] in Anorectal by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials-or-vctcode
* **Source Code**: 80367-6 (Chlamydia trachomatis [Presence] in Anorectal by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials-or-vctcode
* **Source Code**: 80368-4 (Neisseria gonorrhoeae [Presence] in Anorectal by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials-or-vctcode
* **Source Code**: 8043-2 (Trichinella spiralis IgG Ab [Presence] in Serum)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 80680-2 (Vibrio cholerae toxin ctxA gene [Presence] in Stool by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 80824-6 (Zika virus IgM Ab [Presence] in Serum or Plasma by Immunoassay)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 81656-1 (Campylobacter coli+jejuni tuf gene [Presence] in Stool by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 82184-3 (Listeria monocytogenes DNA [Presence] in Cerebral spinal fluid by NAA with non-probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 82300-5 (Shigella sp [Presence] in Stool by Culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 82301-3 (Salmonella sp [Presence] in Stool by Culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 82731-1 (Zika virus IgM Ab [Presence] in Serum by Immunofluorescence)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 85362-2 (Mycobacterium tuberculosis complex DNA [Presence] in Sputum or Bronchial by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 85477-8 (Influenza virus A RNA [Presence] in Upper respiratory specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 85478-6 (Influenza virus B RNA [Presence] in Upper respiratory specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 85622-9 (Zika virus RNA [Presence] in Serum or Plasma by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 85623-7 (Zika virus RNA [Presence] in Urine by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 86515-4 (Chikungunya virus RNA [Presence] in Urine by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 86518-8 (Ebola virus RNA [Presence] in Blood by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 86520-4 (Hantavirus RNA [Presence] in Blood by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 86574-1 (Marburg virus RNA [Presence] in Blood by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 86576-6 (Measles virus RNA [Presence] in Serum by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 86581-6 (Neisseria meningitidis [Presence] in Cerebral spinal fluid by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 86589-9 (Rubella virus RNA [Presence] in Urine by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 87622-7 (Zika virus IgM Ab [Presence] in Specimen by Immunoassay)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 87985-8 (Trichinella spiralis DNA [Presence] in Tissue by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 88177-1 (Coxiella burnetii DNA [Presence] in Blood by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 88178-9 (Coxiella burnetii DNA [Presence] in Tissue by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 88192-0 (Crimean-Congo hemorrhagic fever virus RNA [Presence] in Serum by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 88199-5 (Middle East respiratory syndrome coronavirus (MERS-CoV) RNA [Presence] in Aspirate by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 88224-1 (Neisseria gonorrhoeae DNA [Presence] in Anorectal by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials-or-vctcode
* **Source Code**: 88225-8 (Neisseria gonorrhoeae DNA [Presence] in Throat by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials-or-vctcode
* **Source Code**: 88584-8 (Corynebacterium diphtheriae [Presence] in Upper respiratory specimen by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 88585-5 (Legionella sp identified in Lower respiratory specimen by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 88588-9 (Legionella sp DNA [Identifier] in Lower respiratory specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 88590-5 (Legionella pneumophila DNA [Presence] in Lower respiratory specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 88592-1 (Influenza virus B RNA [Presence] in Lower respiratory specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 88599-6 (Influenza virus A RNA [Presence] in Lower respiratory specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 88629-1 (Chikungunya virus IgM Ab [Presence] in Serum or Plasma by Immunoassay)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 88875-0 (Measles virus genotype A vaccine strain N gene [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 89596-1 (Listeria monocytogenes DNA [Presence] in Blood by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 90066-2 (Corynebacterium sp identified in Isolate by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 90459-9 (Yellow fever virus RNA [Presence] in Blood by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 91071-1 (Hepatitis E virus RNA [Presence] in Stool by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 91077-8 (Measles virus RNA [Presence] in Upper respiratory specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 91078-6 (Zika virus RNA [Presence] in Blood by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 91132-1 (Measles virus RNA [Presence] in Lower respiratory specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 91780-7 (Measles virus [Presence] in Lower respiratory specimen by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 91786-4 (Measles virus [Presence] in Upper respiratory specimen by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 91792-2 (Rubella virus RNA [Presence] in Upper respiratory specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 91807-8 (Middle East respiratory syndrome coronavirus (MERS-CoV) RNA [Presence] in Upper respiratory specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 91823-5 (Rubella virus RNA [Presence] in Lower respiratory specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 91830-0 (Middle East respiratory syndrome coronavirus (MERS-CoV) RNA [Presence] in Lower respiratory specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 92141-1 (Influenza virus B RNA [Presence] in Respiratory system specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 92142-9 (Influenza virus A RNA [Presence] in Respiratory system specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 92145-2 (Legionella pneumophila DNA [Presence] in Respiratory system specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 92771-5 (Streptococcus pneumoniae DNA [Presence] by NAA with probe detection in Positive blood culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 92786-3 (Corynebacterium sp DNA [Presence] by NAA with probe detection in Positive blood culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 92808-5 (Influenza virus A H3 RNA [Presence] in Upper respiratory specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 92809-3 (Influenza virus A H1 RNA [Presence] in Upper respiratory specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 93385-3 (Salmonella sp DNA [Presence] by NAA with probe detection in Positive blood culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 93388-7 (Neisseria meningitidis DNA [Presence] by NAA with probe detection in Positive blood culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 93397-8 (Haemophilus influenzae DNA [Presence] by NAA with probe detection in Positive blood culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 93716-9 (Francisella tularensis IgM Ab [Presence] in Serum by Immunoassay)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 93717-7 (Francisella tularensis IgG Ab [Presence] in Serum by Immunoassay)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 93718-5 (Francisella tularensis IgG and IgM [Interpretation] in Serum)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 93979-3 (Chikungunya virus IgG Ab [Presence] in Serum or Plasma)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 94184-9 (Yellow fever virus RNA [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 94289-6 (West Nile virus neutralizing antibody [Presence] in Specimen by Neutralization test)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 94309-2 (SARS-CoV-2 (COVID-19) RNA [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 94394-4 (Influenza virus A H3 RNA [Presence] in Lower respiratory specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 94395-1 (Influenza virus A H1 2009 pandemic RNA [Presence] in Lower respiratory specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 94396-9 (Influenza virus A H1 RNA [Presence] in Lower respiratory specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 94500-6 (SARS-CoV-2 (COVID-19) RNA [Presence] in Respiratory system specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 94501-4 (Middle East respiratory syndrome coronavirus (MERS-CoV) RNA [Presence] in Respiratory system specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 94759-8 (SARS-CoV-2 (COVID-19) RNA [Presence] in Nasopharynx by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 94845-5 (SARS-CoV-2 (COVID-19) RNA [Presence] in Saliva (oral fluid) by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 95156-6 (Hepatitis E virus RNA [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 95406-5 (SARS-CoV-2 (COVID-19) RNA [Presence] in Nose by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 95687-0 (Chikungunya virus IgM Ab [Presence] in Specimen by Immunoassay)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 95690-4 (Yellow fever virus IgM Ab [Presence] in Specimen by Immunoassay)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 96509-5 (Tick-borne encephalitis virus IgG Ab [Presence] in Specimen by Immunoassay)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 96535-0 (Tick-borne encephalitis virus IgM Ab [Presence] in Specimen by Immunoassay)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 96599-6 (Neisseria gonorrhoeae DNA [Presence] in Cervix by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials-or-vctcode
* **Source Code**: 96797-6 (SARS-CoV-2 (COVID-19) RNA [Presence] in Oropharyngeal wash by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 9709-7 (Coxiella burnetii phase 2 IgG Ab [Titer] in Serum)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 9711-3 (Coxiella burnetii phase 2 IgM Ab [Titer] in Serum)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 97313-1 (Salmonella sp DNA [Presence] in Stool by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 97314-9 (Vibrio cholerae DNA [Presence] in Stool by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 97513-6 (Campylobacter sp [Presence] in Specimen by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 97523-5 (Hepatitis A virus RNA [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 97621-7 (Haemophilus influenzae DNA [Presence] in Synovial fluid by NAA with non-probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 97646-4 (Lassa virus RNA [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 97920-3 (Tick-borne encephalitis virus RNA [Presence] in Specimen by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 9823-6 (Mycobacterium sp identified in Bronchial specimen by Organism specific culture)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 99090-3 (Haemophilus influenzae DNA [Presence] in Cerebral spinal fluid by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials
* **Source Code**: 99092-9 (Neisseria meningitidis DNA [Presence] in Cerebral spinal fluid by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 99094-5 (Streptococcus pneumoniae DNA [Presence] in Cerebral spinal fluid by NAA with probe detection)
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials

-------

**Group 2**Mapping from [SNOMED CT (all versions)](http://hl7.org/fhir/R4/codesystem-snomedct.html) to [CH ELM FOPH Patient Name Representation](CodeSystem-ch-elm-foph-patient-name-representation.md)

* **Source Code**: 19030005 (Human immunodeficiency virus (organism))
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: hiv-code
* **Source Code**: 36115006 (Human immunodeficiency virus type 2 (organism))
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: hiv-code
* **Source Code**: 72904005 (Treponema pallidum (organism))
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: initials-or-vctcode
* **Source Code**: 734351004 (Carbapenemase-producing Enterobacteriaceae (organism))
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: full-name
* **Source Code**: 89293008 (Human immunodeficiency virus type I (organism))
  * **Relationship**: [is related to](http://hl7.org/fhir/R5/codesystem-concept-map-relationship.html#relatedto)
  * **Target Code**: hiv-code



## Resource Content

```json
{
  "resourceType" : "ConceptMap",
  "id" : "ch-elm-results-to-foph-patient-name-representation",
  "url" : "http://fhir.ch/ig/ch-elm/ConceptMap/ch-elm-results-to-foph-patient-name-representation",
  "version" : "1.12.0",
  "name" : "ChElmResultsToFophPatientNameRepresentation",
  "title" : "CH ELM Results To FOPH Patient Name Representation",
  "status" : "active",
  "experimental" : false,
  "date" : "2025-10-21T11:52:21+00:00",
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
  "description" : "This CH ELM concept map specifies the required mode of patient representation for each leading code. It determines whether the full name, initials, or a unique code (e.g., for HIV patients) should be used, based on the specific LOINC code associated with the laboratory data. This ensures consistent and appropriate handling of patient identity in accordance with the type of pathogen reported.",
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
  "sourceCanonical" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-results-laboratory-observation",
  "targetCanonical" : "http://fhir.ch/ig/ch-elm/ValueSet/ch-elm-foph-patient-name-representation",
  "group" : [
    {
      "source" : "http://loinc.org",
      "target" : "http://fhir.ch/ig/ch-elm/CodeSystem/ch-elm-foph-patient-name-representation",
      "element" : [
        {
          "code" : "100383-9",
          "display" : "Monkeypox virus DNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "100749-1",
          "display" : "Legionella pneumophila serogroup 1 [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "100888-7",
          "display" : "Monkeypox virus clade II DNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "100889-5",
          "display" : "Monkeypox virus clade I DNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "100911-7",
          "display" : "Campylobacter sp [Presence] in Stool by Organism specific culture",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "100965-3",
          "display" : "Dengue virus IgG Ab [Interpretation] in Serum, Plasma or Blood",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "101003-2",
          "display" : "Monkeypox virus clade [Type] in Specimen by Sequencing",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "101219-4",
          "display" : "Legionella sp DNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "101307-7",
          "display" : "Plasmodium vivax+ovale DNA [Presence] in Blood by NAA with non-probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "101364-8",
          "display" : "Francisella tularensis DNA [Presence] in Blood by NAA with non-probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "101373-9",
          "display" : "Francisella tularensis DNA [Presence] in Sputum by NAA with non-probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "101423-2",
          "display" : "Influenza virus A H1 RNA [Presence] in Respiratory system specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "101424-0",
          "display" : "Influenza virus A H3 RNA [Presence] in Respiratory system specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "101662-5",
          "display" : "Abnormal Prion Protein [Presence] in Cerebral spinal fluid by RT-QuIC",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "101802-7",
          "display" : "Brucella sp IgA Ab [Presence] in Serum",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "103168-1",
          "display" : "Campylobacter coli+jejuni DNA [Presence] in Wound by NAA with probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "103717-5",
          "display" : "Crimean-Congo hemorrhagic fever virus RNA [Presence] in Blood by NAA with non-probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "103719-1",
          "display" : "Lassa virus RNA [Presence] in Blood by NAA with non-probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "104371-0",
          "display" : "Corynebacterium pseudotuberculosis [Presence] in Specimen by Organism specific culture",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "104372-8",
          "display" : "Corynebacterium pseudotuberculosis [Presence] in Upper respiratory specimen by Organism specific culture",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "104373-6",
          "display" : "Corynebacterium ulcerans [Presence] in Specimen by Organism specific culture",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "104374-4",
          "display" : "Corynebacterium ulcerans [Presence] in Upper respiratory specimen by Organism specific culture",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "104375-1",
          "display" : "Corynebacterium ulcerans DNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "104376-9",
          "display" : "Diphtheria toxin DNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "104395-9",
          "display" : "European tick borne encephalitis virus IgG Ab [Titer] in Serum by Immunoassay --2nd specimen",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "104407-2",
          "display" : "Hantavirus IgG Ab [Titer] in Serum by Immunoassay --2nd specimen",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "104454-4",
          "display" : "Trichinella spiralis IgG Ab [Titer] in Serum by Immunoassay --2nd specimen",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "104476-7",
          "display" : "Zika virus IgG Ab [Titer] in Serum by Immunoassay --2nd specimen",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "105065-7",
          "display" : "Shigella species+EIEC invasion plasmid antigen H ipaH gene [Presence] in Specimen",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "105640-7",
          "display" : "Campylobacter sp DNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "106554-9",
          "display" : "Escherichia coli shiga-like toxin DNA [Presence] in Stool by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "107242-0",
          "display" : "Tick-borne encephalitis virus Ab [Interpretation] in Serum or Plasma",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "11259-9",
          "display" : "Hepatitis C virus RNA [Presence] in Serum or Plasma by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "11469-4",
          "display" : "Bacillus anthracis [Presence] in Specimen by Organism specific culture",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "11477-7",
          "display" : "Microscopic observation [Identifier] in Sputum by Acid fast stain",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "11479-3",
          "display" : "Microscopic observation [Identifier] in Tissue by Acid fast stain",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "11480-1",
          "display" : "Microscopic observation [Identifier] in Urine by Acid fast stain",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "11545-1",
          "display" : "Microscopic observation [Identifier] in Specimen by Acid fast stain",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "13954-3",
          "display" : "Hepatitis B virus e Ag [Presence] in Serum or Plasma by Immunoassay",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "14127-5",
          "display" : "Neisseria gonorrhoeae [Presence] in Anal by Organism specific culture",
          "target" : [
            {
              "code" : "initials-or-vctcode",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "14357-8",
          "display" : "Microscopic observation [Identifier] in Cerebral spinal fluid by Gram stain",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "14463-4",
          "display" : "Chlamydia trachomatis [Presence] in Cervix by Organism specific culture",
          "target" : [
            {
              "code" : "initials-or-vctcode",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "14464-2",
          "display" : "Chlamydia trachomatis [Presence] in Vaginal fluid by Organism specific culture",
          "target" : [
            {
              "code" : "initials-or-vctcode",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "14465-9",
          "display" : "Chlamydia trachomatis [Presence] in Urethra by Organism specific culture",
          "target" : [
            {
              "code" : "initials-or-vctcode",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "16134-9",
          "display" : "Neisseria meningitidis [Presence] in Specimen by Organism specific culture",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "16600-9",
          "display" : "Chlamydia trachomatis rRNA [Presence] in Genital specimen by Probe",
          "target" : [
            {
              "code" : "initials-or-vctcode",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "16676-9",
          "display" : "Corynebacterium diphtheriae [Presence] in Specimen by Organism specific culture",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "17552-1",
          "display" : "Rubella virus IgM Ab [Presence] in Cerebral spinal fluid",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "17563-8",
          "display" : "Salmonella sp identified in Specimen by Organism specific culture",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "17735-2",
          "display" : "Trichinella spiralis IgM Ab [Presence] in Serum",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "20458-6",
          "display" : "Rubella virus IgG Ab [Interpretation] in Serum",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "20489-1",
          "display" : "Streptococcus pneumoniae Ag [Presence] in Cerebral spinal fluid",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "21190-4",
          "display" : "Chlamydia trachomatis DNA [Presence] in Cervix by NAA with probe detection",
          "target" : [
            {
              "code" : "initials-or-vctcode",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "21191-2",
          "display" : "Chlamydia trachomatis DNA [Presence] in Urethra by NAA with probe detection",
          "target" : [
            {
              "code" : "initials-or-vctcode",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "21262-1",
          "display" : "Escherichia coli shiga-like toxin [Presence] in Stool by Immunoassay",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "21363-7",
          "display" : "Legionella pneumophila DNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "21415-5",
          "display" : "Neisseria gonorrhoeae DNA [Presence] in Urethra by NAA with probe detection",
          "target" : [
            {
              "code" : "initials-or-vctcode",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "21416-3",
          "display" : "Neisseria gonorrhoeae DNA [Presence] in Urine by NAA with probe detection",
          "target" : [
            {
              "code" : "initials-or-vctcode",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "21503-8",
          "display" : "Measles virus IgM Ab [Presence] in Serum",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "21613-5",
          "display" : "Chlamydia trachomatis DNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "initials-or-vctcode",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "22314-9",
          "display" : "Hepatitis A virus IgM Ab [Presence] in Serum",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "22502-9",
          "display" : "Measles virus IgG Ab [Titer] in Serum",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "22826-2",
          "display" : "Influenza virus A identified in Specimen by Bioassay",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "22866-8",
          "display" : "Bacillus anthracis Ag [Presence] in Tissue by Immunofluorescence",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "22867-6",
          "display" : "Bacillus anthracis Ag [Presence] in Specimen by Immunofluorescence",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "23024-3",
          "display" : "Coxiella burnetii DNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "23126-6",
          "display" : "Francisella tularensis Ag [Presence] in Tissue by Immune stain",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "23130-8",
          "display" : "Francisella tularensis DNA [Presence] in Tissue by NAA with probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "23499-7",
          "display" : "Trichinella spiralis [Presence] in Tissue by Light microscopy",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "23838-6",
          "display" : "Chlamydia trachomatis rRNA [Presence] in Genital fluid by Probe",
          "target" : [
            {
              "code" : "initials-or-vctcode",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "24002-8",
          "display" : "Microscopic observation [Identifier] in Bronchial specimen by Acid fast stain",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "24102-6",
          "display" : "Corynebacterium toxin [Presence] in Specimen by Immune diffusion (ID)",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "24111-7",
          "display" : "Neisseria gonorrhoeae DNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "initials-or-vctcode",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "24113-3",
          "display" : "Hepatitis B virus core IgM Ab [Presence] in Serum or Plasma by Immunoassay",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "24116-6",
          "display" : "Rubella virus IgM Ab [Presence] in Serum or Plasma by Immunoassay",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "24396-4",
          "display" : "Brucella sp IgG Ab [Presence] in Serum",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "24397-2",
          "display" : "Brucella sp IgM Ab [Presence] in Serum",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "25338-5",
          "display" : "Dengue virus IgM Ab [Presence] in Serum",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "26620-5",
          "display" : "Hantavirus IgG Ab [Presence] in Serum",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "29566-7",
          "display" : "West Nile virus IgG Ab [Presence] in Serum by Immunoassay",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "29610-3",
          "display" : "Hepatitis B virus DNA [Presence] in Serum or Plasma by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "29907-3",
          "display" : "Haemophilus influenzae B DNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "31204-1",
          "display" : "Hepatitis B virus core IgM Ab [Presence] in Serum",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "31314-8",
          "display" : "Coxiella burnetii phase 2 IgG Ab [Presence] in Serum",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "31315-5",
          "display" : "Coxiella burnetii phase 2 IgM Ab [Presence] in Serum",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "31616-6",
          "display" : "Rubella virus IgM Ab [Presence] in Serum",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "31703-2",
          "display" : "West Nile virus IgM Ab [Presence] in Cerebral spinal fluid",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "31726-3",
          "display" : "Bacillus anthracis Ag [Presence] in Specimen",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "31777-6",
          "display" : "Chlamydia trachomatis Ag [Presence] in Specimen",
          "target" : [
            {
              "code" : "initials-or-vctcode",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "31798-2",
          "display" : "Dengue virus Ag [Presence] in Serum",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "31799-0",
          "display" : "Dengue virus Ag [Presence] in Specimen",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "31828-7",
          "display" : "Francisella tularensis Ag [Presence] in Serum",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "31829-5",
          "display" : "Francisella tularensis Ag [Presence] in Specimen",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "31844-4",
          "display" : "Hepatitis B virus e Ag [Presence] in Serum",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "31859-2",
          "display" : "Influenza virus A Ag [Presence] in Specimen",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "31864-2",
          "display" : "Influenza virus B Ag [Presence] in Specimen",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "31868-3",
          "display" : "Legionella pneumophila 1 Ag [Presence] in Urine",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "31870-9",
          "display" : "Legionella pneumophila Ag [Presence] in Urine",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "31879-0",
          "display" : "Measles virus Ag [Presence] in Nose",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "31881-6",
          "display" : "Measles virus Ag [Presence] in Serum or Plasma",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "31883-2",
          "display" : "Measles virus Ag [Presence] in Sputum",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "31884-0",
          "display" : "Measles virus Ag [Presence] in Throat",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "31887-3",
          "display" : "Measles virus Ag [Presence] in Specimen",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "31912-9",
          "display" : "Neisseria meningitidis Ag [Presence] in Specimen",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "31969-9",
          "display" : "Streptococcus pneumoniae Ag [Presence] in Specimen",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "31989-7",
          "display" : "14-3-3 Ag [Presence] in Cerebral spinal fluid",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "32131-5",
          "display" : "Hantavirus IgM Ab [Presence] in Serum",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "32188-5",
          "display" : "Microscopic observation [Identifier] in Cerebral spinal fluid by Acid fast stain",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "32705-6",
          "display" : "Neisseria gonorrhoeae DNA [Presence] in Vaginal fluid by NAA with probe detection",
          "target" : [
            {
              "code" : "initials-or-vctcode",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "32781-7",
          "display" : "Legionella sp Ag [Presence] in Urine",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "33676-8",
          "display" : "Francisella tularensis [Presence] in Specimen by Organism specific culture",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "33679-2",
          "display" : "Francisella tularensis DNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "33685-9",
          "display" : "Yersinia pestis [Presence] in Specimen by Organism specific culture",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "33687-5",
          "display" : "Yersinia pestis Ag [Presence] in Specimen by Immunofluorescence",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "33691-7",
          "display" : "Yersinia pestis DNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "33696-6",
          "display" : "Clostridium botulinum toxin [Presence] in Specimen by Mouse bioassay",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "34460-6",
          "display" : "West Nile virus RNA [Presence] in Blood by NAA with probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "34461-4",
          "display" : "West Nile virus RNA [Presence] in Cerebral spinal fluid by NAA with probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "34487-9",
          "display" : "Influenza virus A RNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "38270-5",
          "display" : "Influenza virus A H7 RNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "38272-1",
          "display" : "Influenza virus A H5 RNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "38275-4",
          "display" : "Transmissible spongiform encephalopathy [Presence] in Brain by Light microscopy",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "38353-9",
          "display" : "Streptococcus sp identified in Specimen by Organism specific culture",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "38379-4",
          "display" : "Mycobacterium tuberculosis complex DNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "38382-8",
          "display" : "Influenza virus B [Presence] in Specimen by Organism specific culture",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "39007-0",
          "display" : "Hepatitis B virus e Ag [Presence] in Specimen",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "39025-2",
          "display" : "Influenza virus A hemagglutinin cDNA [Identifier] in Specimen by Sequencing",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "40614-0",
          "display" : "Brucella sp Ab [Presence] in Serum by Agglutination",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "40669-4",
          "display" : "Rubella virus IgM Ab [Presence] in Cerebral spinal fluid by Immunoassay",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "40982-1",
          "display" : "Influenza virus B RNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "41216-3",
          "display" : "Yellow fever virus IgM Ab [Presence] in Serum",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "41447-4",
          "display" : "Plasmodium falciparum DNA [Presence] in Blood by NAA with probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "41448-2",
          "display" : "Plasmodium malariae DNA [Presence] in Blood by NAA with probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "41449-0",
          "display" : "Plasmodium ovale DNA [Presence] in Blood by NAA with probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "41450-8",
          "display" : "Plasmodium vivax DNA [Presence] in Blood by NAA with probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "41458-1",
          "display" : "SARS coronavirus RNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "41623-0",
          "display" : "Bacillus anthracis DNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "41625-5",
          "display" : "Brucella sp DNA [Identifier] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "41626-3",
          "display" : "Brucella sp DNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "41636-2",
          "display" : "Ebola virus RNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "41638-8",
          "display" : "Marburg virus RNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "41763-4",
          "display" : "Rubella virus IgG Ab [Titer] in Serum",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "41856-6",
          "display" : "Variola virus DNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "42931-6",
          "display" : "Chlamydia trachomatis rRNA [Presence] in Urine by NAA with probe detection",
          "target" : [
            {
              "code" : "initials-or-vctcode",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "43304-5",
          "display" : "Chlamydia trachomatis rRNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "initials-or-vctcode",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "43305-2",
          "display" : "Neisseria gonorrhoeae rRNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "initials-or-vctcode",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "43389-6",
          "display" : "Streptococcus sp identified in Isolate by Organism specific culture",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "44012-3",
          "display" : "Measles virus IgG and IgM [Interpretation] in Serum",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "44797-9",
          "display" : "Brucella sp [Presence] in Specimen by Organism specific culture",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "45084-1",
          "display" : "Chlamydia trachomatis DNA [Presence] in Vaginal fluid by NAA with probe detection",
          "target" : [
            {
              "code" : "initials-or-vctcode",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "45090-8",
          "display" : "Chlamydia trachomatis DNA [Presence] in Anal by NAA with probe detection",
          "target" : [
            {
              "code" : "initials-or-vctcode",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "45093-2",
          "display" : "Chlamydia trachomatis [Presence] in Anal by Organism specific culture",
          "target" : [
            {
              "code" : "initials-or-vctcode",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "45095-7",
          "display" : "Chlamydia trachomatis [Presence] in Genital specimen by Organism specific culture",
          "target" : [
            {
              "code" : "initials-or-vctcode",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "46454-5",
          "display" : "Shigella sp [Presence] in Specimen by Organism specific culture",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "46732-4",
          "display" : "Francisella tularensis subtype [Identifier] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "47085-6",
          "display" : "Plasmodium sp DNA [Presence] in Blood by NAA with probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "47387-6",
          "display" : "Neisseria gonorrhoeae DNA [Presence] in Genital specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "initials-or-vctcode",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "48310-7",
          "display" : "Influenza virus A [Presence] in Specimen by Organism specific culture",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "48508-6",
          "display" : "Measles virus RNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "49124-1",
          "display" : "Coxiella burnetii identified in Specimen by Sequencing",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "49521-8",
          "display" : "Influenza virus A H1 RNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "49524-2",
          "display" : "Influenza virus A H3 RNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "49528-3",
          "display" : "Influenza virus A H9 RNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "49612-5",
          "display" : "Salmonella sp DNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "49671-1",
          "display" : "Neisseria meningitidis DNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "49672-9",
          "display" : "Streptococcus pneumoniae DNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "5007-0",
          "display" : "Hepatitis B virus DNA [Presence] in Blood by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "5009-6",
          "display" : "Hepatitis B virus DNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "5010-4",
          "display" : "Hepatitis C virus RNA [Presence] in Blood by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "5012-0",
          "display" : "Hepatitis C virus RNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "50387-0",
          "display" : "Chlamydia trachomatis rRNA [Presence] in Cervix by NAA with probe detection",
          "target" : [
            {
              "code" : "initials-or-vctcode",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "50388-8",
          "display" : "Neisseria gonorrhoeae rRNA [Presence] in Cervix by NAA with probe detection",
          "target" : [
            {
              "code" : "initials-or-vctcode",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "50687-3",
          "display" : "Plasmodium sp Ag [Presence] in Blood",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "50697-2",
          "display" : "Influenza virus A Ag [Identifier] in Isolate",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "51578-3",
          "display" : "Chlamydia trachomatis DNA [Presence] in Semen by NAA with probe detection",
          "target" : [
            {
              "code" : "initials-or-vctcode",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "51587-4",
          "display" : "Plasmodium sp [Presence] in Blood by Light microscopy",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "51646-8",
          "display" : "Rabies virus RNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "51664-1",
          "display" : "Chikungunya virus RNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "51939-7",
          "display" : "Escherichia coli shiga-like toxin 2 [Presence] in Stool by Immunoassay",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "51940-5",
          "display" : "Escherichia coli shiga-like toxin 1 [Presence] in Stool by Immunoassay",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "5195-3",
          "display" : "Hepatitis B virus surface Ag [Presence] in Serum",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "5196-1",
          "display" : "Hepatitis B virus surface Ag [Presence] in Serum or Plasma by Immunoassay",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "5199-5",
          "display" : "Hepatitis C virus Ab [Presence] in Serum by Immunoblot",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "52986-7",
          "display" : "Rubella virus IgG Ab avidity [Ratio] in Serum by Immunoassay",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "534-8",
          "display" : "Mycobacterium sp identified in Cerebral spinal fluid by Organism specific culture",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "53607-8",
          "display" : "Haemophilus influenzae B DNA [Presence] in Blood by NAA with probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "53879-3",
          "display" : "Neisseria gonorrhoeae rRNA [Presence] in Vaginal fluid by NAA with probe detection",
          "target" : [
            {
              "code" : "initials-or-vctcode",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "53917-1",
          "display" : "Streptococcus pneumoniae DNA [Presence] in Blood by NAA with probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "53925-4",
          "display" : "Chlamydia trachomatis rRNA [Presence] in Urethra by NAA with probe detection",
          "target" : [
            {
              "code" : "initials-or-vctcode",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "53926-2",
          "display" : "Chlamydia trachomatis rRNA [Presence] in Vaginal fluid by NAA with probe detection",
          "target" : [
            {
              "code" : "initials-or-vctcode",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "53927-0",
          "display" : "Neisseria gonorrhoeae rRNA [Presence] in Urethra by NAA with probe detection",
          "target" : [
            {
              "code" : "initials-or-vctcode",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "53941-1",
          "display" : "Vibrio cholerae toxin Ag [Presence] in Isolate",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "53942-9",
          "display" : "Vibrio cholerae toxin ctx gene [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "53946-0",
          "display" : "Escherichia coli shiga-like toxin identified in Specimen",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "539-7",
          "display" : "Mycobacterium sp identified in Sputum by Organism specific culture",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "540-5",
          "display" : "Mycobacterium sp identified in Tissue by Organism specific culture",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "54091-4",
          "display" : "Rubella virus RNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "541-3",
          "display" : "Mycobacterium sp identified in Urine by Organism specific culture",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "543-9",
          "display" : "Mycobacterium sp identified in Specimen by Organism specific culture",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "552-0",
          "display" : "Brucella sp identified in Specimen by Organism specific culture",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "55465-9",
          "display" : "Influenza virus A H1 2009 pandemic RNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "56129-0",
          "display" : "Chikungunya virus IgG Ab [Presence] in Serum or Plasma by Immunofluorescence",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "56131-6",
          "display" : "Chikungunya virus IgM Ab [Presence] in Serum or Plasma by Immunofluorescence",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "56475-7",
          "display" : "Salmonella sp antigenic formula [Identifier] in Isolate by Agglutination",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "57287-5",
          "display" : "Chlamydia trachomatis rRNA [Presence] in Anal by NAA with probe detection",
          "target" : [
            {
              "code" : "initials-or-vctcode",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "57458-2",
          "display" : "Neisseria gonorrhoeae rRNA [Presence] in Anal by NAA with probe detection",
          "target" : [
            {
              "code" : "initials-or-vctcode",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "57934-2",
          "display" : "Chikungunya virus IgM Ab [Presence] in Serum or Plasma",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "58473-0",
          "display" : "Haemophilus influenzae serotype DNA [Identifier] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "589-2",
          "display" : "Legionella sp identified in Bronchial specimen by Organism specific culture",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "590-0",
          "display" : "Legionella sp identified in Sputum by Organism specific culture",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "593-4",
          "display" : "Legionella sp identified in Specimen by Organism specific culture",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "59423-4",
          "display" : "Influenza virus A hemagglutinin type RNA [Identifier] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "60255-7",
          "display" : "Neisseria gonorrhoeae rRNA [Presence] in Throat by NAA with probe detection",
          "target" : [
            {
              "code" : "initials-or-vctcode",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "60256-5",
          "display" : "Neisseria gonorrhoeae rRNA [Presence] in Urine by NAA with probe detection",
          "target" : [
            {
              "code" : "initials-or-vctcode",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "60261-5",
          "display" : "Coxiella burnetii DNA [Presence] in Serum or Plasma by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "60274-8",
          "display" : "Rubella virus RNA [Presence] in Serum or Plasma by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "60422-3",
          "display" : "Measles virus genotype [Identifier] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "60534-5",
          "display" : "SARS coronavirus RNA [Presence] in Serum or Plasma by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "60546-9",
          "display" : "Polio virus identified [Type] in Isolate by Organism specific culture",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "61366-1",
          "display" : "Haemophilus influenzae DNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "61369-5",
          "display" : "Listeria monocytogenes DNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "61371-1",
          "display" : "Vibrio cholerae DNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "62469-2",
          "display" : "HIV 1 RNA [Units/volume] (viral load) in Serum or Plasma by NAA with probe detection",
          "target" : [
            {
              "code" : "hiv-code",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "6349-5",
          "display" : "Chlamydia trachomatis [Presence] in Specimen by Organism specific culture",
          "target" : [
            {
              "code" : "initials-or-vctcode",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "6356-0",
          "display" : "Chlamydia trachomatis DNA [Presence] in Genital specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "initials-or-vctcode",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "6357-8",
          "display" : "Chlamydia trachomatis DNA [Presence] in Urine by NAA with probe detection",
          "target" : [
            {
              "code" : "initials-or-vctcode",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "6387-5",
          "display" : "Dengue virus DNA [Presence] in Specimen by Probe",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "6508-6",
          "display" : "Neisseria meningitidis Ag [Presence] in Cerebral spinal fluid",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "6532-6",
          "display" : "Rabies virus Ag [Presence] in Specimen by Immunofluorescence",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "6539-1",
          "display" : "Rabies virus identified in Specimen by Organism specific culture",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "6548-2",
          "display" : "Rubella virus identified in Serum by Organism specific culture",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "65756-9",
          "display" : "Salmonella sp serovar [Type] in Isolate",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "6578-9",
          "display" : "Vibrio sp identified in Blood by Organism specific culture",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "6579-7",
          "display" : "Vibrio sp identified in Stool by Organism specific culture",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "6581-3",
          "display" : "Vibrio sp identified in Specimen by Organism specific culture",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "6584-7",
          "display" : "Virus identified in Specimen by Culture",
          "target" : [
            {
              "code" : "conditional",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "6600-1",
          "display" : "Haemophilus sp identified in Specimen by Organism specific culture",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "6604-3",
          "display" : "Influenza virus identified in Specimen by Organism specific culture",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "6609-2",
          "display" : "Listeria sp identified in Specimen by Organism specific culture",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "67561-1",
          "display" : "Corynebacterium diphtheriae DNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "6811-4",
          "display" : "Dengue virus IgG Ab [Titer] in Serum",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "688-2",
          "display" : "Neisseria gonorrhoeae [Presence] in Cervix by Organism specific culture",
          "target" : [
            {
              "code" : "initials-or-vctcode",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "691-6",
          "display" : "Neisseria gonorrhoeae [Presence] in Genital specimen by Organism specific culture",
          "target" : [
            {
              "code" : "initials-or-vctcode",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "693-2",
          "display" : "Neisseria gonorrhoeae [Presence] in Vaginal fluid by Organism specific culture",
          "target" : [
            {
              "code" : "initials-or-vctcode",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "694-0",
          "display" : "Neisseria gonorrhoeae [Presence] in Semen by Organism specific culture",
          "target" : [
            {
              "code" : "initials-or-vctcode",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "69410-9",
          "display" : "Haemophilus influenzae [Identifier] in Specimen by Organism specific culture",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "69577-5",
          "display" : "Hepatitis E virus RNA [Presence] in Blood by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "696-5",
          "display" : "Neisseria gonorrhoeae [Presence] in Throat by Organism specific culture",
          "target" : [
            {
              "code" : "initials-or-vctcode",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "697-3",
          "display" : "Neisseria gonorrhoeae [Presence] in Urethra by Organism specific culture",
          "target" : [
            {
              "code" : "initials-or-vctcode",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "69765-6",
          "display" : "Rubella virus IgM Ab [Presence] in Body fluid by Immunoassay",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "698-1",
          "display" : "Neisseria gonorrhoeae [Presence] in Specimen by Organism specific culture",
          "target" : [
            {
              "code" : "initials-or-vctcode",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "70242-3",
          "display" : "Shigella species+EIEC invasion plasmid antigen H ipaH gene [Presence] in Stool by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "70568-1",
          "display" : "Plasmodium knowlesi DNA [Presence] in Blood by NAA with probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "70569-9",
          "display" : "Plasmodium sp Ag [Identifier] in Blood by Rapid immunoassay",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "70858-6",
          "display" : "Rabies virus neutralizing antibody [Presence] in Serum by Neutralization test",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "71782-7",
          "display" : "Yellow fever virus IgM Ab [Presence] in Cerebral spinal fluid by Immunoassay",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "72307-2",
          "display" : "Brucella sp IgG Ab [Titer] in Serum --2nd specimen",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "73907-8",
          "display" : "Polio virus identified in Specimen by Organism specific culture",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "74037-3",
          "display" : "Transmissible spongiform encephalopathy [Identifier] in Brain by Light microscopy",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "74785-7",
          "display" : "Influenza virus B Victoria lineage RNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "74786-5",
          "display" : "Influenza virus B Yamagata lineage RNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "75756-7",
          "display" : "Bacteria identified in Isolate by MS.MALDI-TOF",
          "target" : [
            {
              "code" : "conditional",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "76078-5",
          "display" : "Influenza virus A RNA [Presence] in Nasopharynx by NAA with probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "76080-1",
          "display" : "Influenza virus B RNA [Presence] in Nasopharynx by NAA with probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "76626-1",
          "display" : "Measles virus [Presence] in Specimen by Organism specific culture",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "76772-3",
          "display" : "Plasmodium falciparum Ag [Presence] in Blood by Rapid immunoassay",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "77026-3",
          "display" : "Influenza virus A H1 RNA [Presence] in Nasopharynx by NAA with probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "77027-1",
          "display" : "Influenza virus A H3 RNA [Presence] in Nasopharynx by NAA with probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "77028-9",
          "display" : "Influenza virus A H1 2009 pandemic RNA [Presence] in Nasopharynx by NAA with probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "77685-6",
          "display" : "HIV 1 and 2 IgG Ab [Identifier] in Serum or Plasma by Immunoblot",
          "target" : [
            {
              "code" : "hiv-code",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "77955-3",
          "display" : "Yellow fever virus IgM Ab [Presence] in Serum by Immunofluorescence",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "7889-9",
          "display" : "Francisella tularensis IgG Ab [Presence] in Serum",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "7890-7",
          "display" : "Francisella tularensis IgM Ab [Presence] in Serum",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "7899-8",
          "display" : "Hantavirus RNA [Presence] in Serum by NAA with probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "7904-6",
          "display" : "Hepatitis A virus RNA [Presence] in Serum by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "79189-7",
          "display" : "Hepatitis C virus core Ag [Presence] in Serum or Plasma by Immunoassay",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "79190-5",
          "display" : "Zika virus RNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "79386-9",
          "display" : "Escherichia coli Stx1 toxin stx1 gene [Presence] in Stool by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "79387-7",
          "display" : "Escherichia coli Stx2 toxin stx2 gene [Presence] in Stool by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "7964-0",
          "display" : "Measles virus RNA [Presence] in Nose by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "80363-5",
          "display" : "Chlamydia trachomatis DNA [Presence] in Anorectal by NAA with probe detection",
          "target" : [
            {
              "code" : "initials-or-vctcode",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "80364-3",
          "display" : "Chlamydia trachomatis rRNA [Presence] in Anorectal by NAA with probe detection",
          "target" : [
            {
              "code" : "initials-or-vctcode",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "80366-8",
          "display" : "Neisseria gonorrhoeae rRNA [Presence] in Anorectal by NAA with probe detection",
          "target" : [
            {
              "code" : "initials-or-vctcode",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "80367-6",
          "display" : "Chlamydia trachomatis [Presence] in Anorectal by Organism specific culture",
          "target" : [
            {
              "code" : "initials-or-vctcode",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "80368-4",
          "display" : "Neisseria gonorrhoeae [Presence] in Anorectal by Organism specific culture",
          "target" : [
            {
              "code" : "initials-or-vctcode",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "8043-2",
          "display" : "Trichinella spiralis IgG Ab [Presence] in Serum",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "80680-2",
          "display" : "Vibrio cholerae toxin ctxA gene [Presence] in Stool by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "80824-6",
          "display" : "Zika virus IgM Ab [Presence] in Serum or Plasma by Immunoassay",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "81656-1",
          "display" : "Campylobacter coli+jejuni tuf gene [Presence] in Stool by NAA with probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "82184-3",
          "display" : "Listeria monocytogenes DNA [Presence] in Cerebral spinal fluid by NAA with non-probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "82300-5",
          "display" : "Shigella sp [Presence] in Stool by Culture",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "82301-3",
          "display" : "Salmonella sp [Presence] in Stool by Culture",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "82731-1",
          "display" : "Zika virus IgM Ab [Presence] in Serum by Immunofluorescence",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "85362-2",
          "display" : "Mycobacterium tuberculosis complex DNA [Presence] in Sputum or Bronchial by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "85477-8",
          "display" : "Influenza virus A RNA [Presence] in Upper respiratory specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "85478-6",
          "display" : "Influenza virus B RNA [Presence] in Upper respiratory specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "85622-9",
          "display" : "Zika virus RNA [Presence] in Serum or Plasma by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "85623-7",
          "display" : "Zika virus RNA [Presence] in Urine by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "86515-4",
          "display" : "Chikungunya virus RNA [Presence] in Urine by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "86518-8",
          "display" : "Ebola virus RNA [Presence] in Blood by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "86520-4",
          "display" : "Hantavirus RNA [Presence] in Blood by NAA with probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "86574-1",
          "display" : "Marburg virus RNA [Presence] in Blood by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "86576-6",
          "display" : "Measles virus RNA [Presence] in Serum by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "86581-6",
          "display" : "Neisseria meningitidis [Presence] in Cerebral spinal fluid by Organism specific culture",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "86589-9",
          "display" : "Rubella virus RNA [Presence] in Urine by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "87622-7",
          "display" : "Zika virus IgM Ab [Presence] in Specimen by Immunoassay",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "87985-8",
          "display" : "Trichinella spiralis DNA [Presence] in Tissue by NAA with probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "88177-1",
          "display" : "Coxiella burnetii DNA [Presence] in Blood by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "88178-9",
          "display" : "Coxiella burnetii DNA [Presence] in Tissue by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "88192-0",
          "display" : "Crimean-Congo hemorrhagic fever virus RNA [Presence] in Serum by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "88199-5",
          "display" : "Middle East respiratory syndrome coronavirus (MERS-CoV) RNA [Presence] in Aspirate by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "88224-1",
          "display" : "Neisseria gonorrhoeae DNA [Presence] in Anorectal by NAA with probe detection",
          "target" : [
            {
              "code" : "initials-or-vctcode",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "88225-8",
          "display" : "Neisseria gonorrhoeae DNA [Presence] in Throat by NAA with probe detection",
          "target" : [
            {
              "code" : "initials-or-vctcode",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "88584-8",
          "display" : "Corynebacterium diphtheriae [Presence] in Upper respiratory specimen by Organism specific culture",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "88585-5",
          "display" : "Legionella sp identified in Lower respiratory specimen by Organism specific culture",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "88588-9",
          "display" : "Legionella sp DNA [Identifier] in Lower respiratory specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "88590-5",
          "display" : "Legionella pneumophila DNA [Presence] in Lower respiratory specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "88592-1",
          "display" : "Influenza virus B RNA [Presence] in Lower respiratory specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "88599-6",
          "display" : "Influenza virus A RNA [Presence] in Lower respiratory specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "88629-1",
          "display" : "Chikungunya virus IgM Ab [Presence] in Serum or Plasma by Immunoassay",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "88875-0",
          "display" : "Measles virus genotype A vaccine strain N gene [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "89596-1",
          "display" : "Listeria monocytogenes DNA [Presence] in Blood by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "90066-2",
          "display" : "Corynebacterium sp identified in Isolate by Organism specific culture",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "90459-9",
          "display" : "Yellow fever virus RNA [Presence] in Blood by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "91071-1",
          "display" : "Hepatitis E virus RNA [Presence] in Stool by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "91077-8",
          "display" : "Measles virus RNA [Presence] in Upper respiratory specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "91078-6",
          "display" : "Zika virus RNA [Presence] in Blood by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "91132-1",
          "display" : "Measles virus RNA [Presence] in Lower respiratory specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "91780-7",
          "display" : "Measles virus [Presence] in Lower respiratory specimen by Organism specific culture",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "91786-4",
          "display" : "Measles virus [Presence] in Upper respiratory specimen by Organism specific culture",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "91792-2",
          "display" : "Rubella virus RNA [Presence] in Upper respiratory specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "91807-8",
          "display" : "Middle East respiratory syndrome coronavirus (MERS-CoV) RNA [Presence] in Upper respiratory specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "91823-5",
          "display" : "Rubella virus RNA [Presence] in Lower respiratory specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "91830-0",
          "display" : "Middle East respiratory syndrome coronavirus (MERS-CoV) RNA [Presence] in Lower respiratory specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "92141-1",
          "display" : "Influenza virus B RNA [Presence] in Respiratory system specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "92142-9",
          "display" : "Influenza virus A RNA [Presence] in Respiratory system specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "92145-2",
          "display" : "Legionella pneumophila DNA [Presence] in Respiratory system specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "92771-5",
          "display" : "Streptococcus pneumoniae DNA [Presence] by NAA with probe detection in Positive blood culture",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "92786-3",
          "display" : "Corynebacterium sp DNA [Presence] by NAA with probe detection in Positive blood culture",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "92808-5",
          "display" : "Influenza virus A H3 RNA [Presence] in Upper respiratory specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "92809-3",
          "display" : "Influenza virus A H1 RNA [Presence] in Upper respiratory specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "93385-3",
          "display" : "Salmonella sp DNA [Presence] by NAA with probe detection in Positive blood culture",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "93388-7",
          "display" : "Neisseria meningitidis DNA [Presence] by NAA with probe detection in Positive blood culture",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "93397-8",
          "display" : "Haemophilus influenzae DNA [Presence] by NAA with probe detection in Positive blood culture",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "93716-9",
          "display" : "Francisella tularensis IgM Ab [Presence] in Serum by Immunoassay",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "93717-7",
          "display" : "Francisella tularensis IgG Ab [Presence] in Serum by Immunoassay",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "93718-5",
          "display" : "Francisella tularensis IgG and IgM [Interpretation] in Serum",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "93979-3",
          "display" : "Chikungunya virus IgG Ab [Presence] in Serum or Plasma",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "94184-9",
          "display" : "Yellow fever virus RNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "94289-6",
          "display" : "West Nile virus neutralizing antibody [Presence] in Specimen by Neutralization test",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "94309-2",
          "display" : "SARS-CoV-2 (COVID-19) RNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "94394-4",
          "display" : "Influenza virus A H3 RNA [Presence] in Lower respiratory specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "94395-1",
          "display" : "Influenza virus A H1 2009 pandemic RNA [Presence] in Lower respiratory specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "94396-9",
          "display" : "Influenza virus A H1 RNA [Presence] in Lower respiratory specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "94500-6",
          "display" : "SARS-CoV-2 (COVID-19) RNA [Presence] in Respiratory system specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "94501-4",
          "display" : "Middle East respiratory syndrome coronavirus (MERS-CoV) RNA [Presence] in Respiratory system specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "94759-8",
          "display" : "SARS-CoV-2 (COVID-19) RNA [Presence] in Nasopharynx by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "94845-5",
          "display" : "SARS-CoV-2 (COVID-19) RNA [Presence] in Saliva (oral fluid) by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "95156-6",
          "display" : "Hepatitis E virus RNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "95406-5",
          "display" : "SARS-CoV-2 (COVID-19) RNA [Presence] in Nose by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "95687-0",
          "display" : "Chikungunya virus IgM Ab [Presence] in Specimen by Immunoassay",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "95690-4",
          "display" : "Yellow fever virus IgM Ab [Presence] in Specimen by Immunoassay",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "96509-5",
          "display" : "Tick-borne encephalitis virus IgG Ab [Presence] in Specimen by Immunoassay",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "96535-0",
          "display" : "Tick-borne encephalitis virus IgM Ab [Presence] in Specimen by Immunoassay",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "96599-6",
          "display" : "Neisseria gonorrhoeae DNA [Presence] in Cervix by NAA with probe detection",
          "target" : [
            {
              "code" : "initials-or-vctcode",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "96797-6",
          "display" : "SARS-CoV-2 (COVID-19) RNA [Presence] in Oropharyngeal wash by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "9709-7",
          "display" : "Coxiella burnetii phase 2 IgG Ab [Titer] in Serum",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "9711-3",
          "display" : "Coxiella burnetii phase 2 IgM Ab [Titer] in Serum",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "97313-1",
          "display" : "Salmonella sp DNA [Presence] in Stool by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "97314-9",
          "display" : "Vibrio cholerae DNA [Presence] in Stool by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "97513-6",
          "display" : "Campylobacter sp [Presence] in Specimen by Organism specific culture",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "97523-5",
          "display" : "Hepatitis A virus RNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "97621-7",
          "display" : "Haemophilus influenzae DNA [Presence] in Synovial fluid by NAA with non-probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "97646-4",
          "display" : "Lassa virus RNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "97920-3",
          "display" : "Tick-borne encephalitis virus RNA [Presence] in Specimen by NAA with probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "9823-6",
          "display" : "Mycobacterium sp identified in Bronchial specimen by Organism specific culture",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "99090-3",
          "display" : "Haemophilus influenzae DNA [Presence] in Cerebral spinal fluid by NAA with probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "99092-9",
          "display" : "Neisseria meningitidis DNA [Presence] in Cerebral spinal fluid by NAA with probe detection",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "99094-5",
          "display" : "Streptococcus pneumoniae DNA [Presence] in Cerebral spinal fluid by NAA with probe detection",
          "target" : [
            {
              "code" : "initials",
              "equivalence" : "relatedto"
            }
          ]
        }
      ]
    },
    {
      "source" : "http://snomed.info/sct",
      "target" : "http://fhir.ch/ig/ch-elm/CodeSystem/ch-elm-foph-patient-name-representation",
      "element" : [
        {
          "code" : "19030005",
          "display" : "Human immunodeficiency virus (organism)",
          "target" : [
            {
              "code" : "hiv-code",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "36115006",
          "display" : "Human immunodeficiency virus type 2 (organism)",
          "target" : [
            {
              "code" : "hiv-code",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "72904005",
          "display" : "Treponema pallidum (organism)",
          "target" : [
            {
              "code" : "initials-or-vctcode",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "734351004",
          "display" : "Carbapenemase-producing Enterobacteriaceae (organism)",
          "target" : [
            {
              "code" : "full-name",
              "equivalence" : "relatedto"
            }
          ]
        },
        {
          "code" : "89293008",
          "display" : "Human immunodeficiency virus type I (organism)",
          "target" : [
            {
              "code" : "hiv-code",
              "equivalence" : "relatedto"
            }
          ]
        }
      ]
    }
  ]
}

```
